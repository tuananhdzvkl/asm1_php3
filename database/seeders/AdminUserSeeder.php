<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'anhthu09112k5@gmail.com',
            'password' => Hash::make('08122004'), // Thay 'password' bằng mật khẩu mong muốn
            'level' => 'Admin',
            'image' => 'default.jpg' // Hoặc để trống nếu không cần ảnh
        ]);
    }
}
