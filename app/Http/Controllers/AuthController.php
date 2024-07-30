<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'image' => 'nullable|image|max:2048', // Thêm kiểm tra ảnh
            'level' => 'required|in:admin,user' // Thêm validation cho level
        ])->validate();

        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = Hash::make($data['password']);
        $data['level'] = 'Admin';

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('profile_images', 'public');
        }

        User::create($data);

        return redirect()->route('login')->with('success', 'Account registered successfully');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('user.home')->with('success', 'Logged in successfully');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/')->with('success', 'Logged out successfully');
    }

    public function profile()
    {
        return view('profile');
    }

    public function update(Request $request)
{
    // Validate input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
    ]);

    $user = Auth::user();

    // Update user information
    $user->name = $validatedData['name'];
    $user->phone = $validatedData['phone'];
    $user->address = $validatedData['address'];

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        // Store the new image
        $imagePath = $request->file('image')->store('profile_images', 'public');
        $user->image = $imagePath;
    }

    // Save the updated user information
    $user->save();

    return redirect()->route('profile')->with('success', 'Profile updated successfully');
}


    public function forgot_password()
    {
        return view('auth.forgotPassword');
    }
}
