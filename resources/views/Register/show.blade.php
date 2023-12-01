@extends('components.layout')
@section('title')
  <title>Register</title>
@endsection
@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md mt-10">
  <h2 class="text-2xl font-semibold mb-6">Sign Up</h2>

  <!-- Form -->
  <form action="/register" method="POST">
    {{-- this defines the session --}}
    @csrf
      <!-- Name Field -->
      <div class="mb-4">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
          <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="John Doe" value="{{old('name')}}" required>
          @error('name')
            <p class="text-red-500">{{$message}}</p>
          @enderror
      </div>

      <!-- Username Field -->
      <div class="mb-4">
          <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
          <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="johndoe" value="{{old('username')}}" required>
          @error('username')
            <p class="text-red-500">{{$message}}</p>
          @enderror
      </div>

      <!-- Email Field -->
      <div class="mb-4">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="john.doe@example.com" value="{{old('email')}}" required>
          @error('email')
            <p class="text-red-500">{{$message}}</p>
          @enderror
      </div>

      <!-- Password Field -->
      <div class="mb-6">
          <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
          <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="********" required>
          @error('password')
            <p class="text-red-500">{{$message}}</p>
          @enderror
      </div>

      <!-- Submit Button -->
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
          Sign Up
      </button>
  </form>
</div>
@endsection
