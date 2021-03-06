@extends('layout.app')
@section('content')
    <div class="flex justify-center lg:m-10 lg:px-10 md:p-6">
        <div class="lg:w-5/12 md:w-full bg-blue-100 p-6 rounded-lg">
            <div class="container">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="fname" class="sr-only">User First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="Your First Name"
                            class="border-2 w-full p-4 rounded-lg @error('fname')
                                border-red-500
                            @enderror"
                            value="{{ old('fname') }}">
                        @error('fname')
                            <div class="text-red-500 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="lname" class="sr-only">User last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Your last Name"
                            class="border-2 w-full p-4 rounded-lg @error('lname')
                            border-red-500
                        @enderror"
                            value="{{ old('lname') }}">
                        @error('lname')
                            <div class="text-red-500 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="sr-only">User Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email"
                            class="border-2 w-full p-4 rounded-lg @error('email')
                            border-red-500
                        @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-red-500 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="sr-only">User Password</label>
                        <input type="password" name="password" id="password" placeholder="Your Password"
                            class="border-2 w-full p-4 rounded-lg @error('password')
                            border-red-500
                        @enderror"
                            value="">
                        @error('password')
                            <div class="text-red-500 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirm Password"
                            class="border-2 w-full p-4 rounded-lg @error('password_confirmation')
                                border-red-500
                            @enderror"
                            value="">
                        @error('password_confirmation')
                            <div class="text-red-500 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div><button type="submit"
                            class="bg-blue-600 text-white p-3 rounded font-medium w-full">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
