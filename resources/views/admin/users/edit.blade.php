@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <div class="container">
        <h1>Edit Profile</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}" required>
            </div>

            <div class="form-group">
                <label for="image">Profile Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @if (auth()->user()->image) 
                    <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile Image" class="img-profile mt-2" width="100" height="100">
                @endif
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', auth()->user()->phone) }}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', auth()->user()->address) }}">
            </div>

            

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
