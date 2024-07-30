@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <h1 class="mb-0">Profile</h1>
    <hr />

    <form action="{{ route('profile.update') }}" id="profile_setup_frm" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Các trường nhập liệu khác -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control @error('name')is-invalid @enderror">
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ auth()->user()->phone }}" class="form-control @error('phone')is-invalid @enderror">
            @error('phone')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" value="{{ auth()->user()->address }}" class="form-control @error('address')is-invalid @enderror">
            @error('address')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Profile Image</label>
            <input type="file" name="image" class="form-control @error('image')is-invalid @enderror">
            @error('image')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
    
@endsection