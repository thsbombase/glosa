@extends('layouts.index')
@section('title','Register')
@section('content')

<div class="m-auto">
    <div hidden class="fixed inset-0 w-7/12 bg-amber-200 bg-opacity-70 lg:block ">
        <video class="z-10 object-contain w-full h-full" src="{{asset('video/bg-register.webm')}}" muted autoplay loop preload></video>
    </div>
    <div hidden role="hidden" class="fixed inset-0 w-6/12 ml-auto bg-white bg-opacity-70 backdrop-blur-xl lg:block"></div>
    <div class="relative h-full ml-auto lg:w-6/12">
        <div class="px-6 py-12 m-auto sm:p-20 xl:w-10/12">
            <div class="space-y-4">
                <img src="{{asset('img/glòsa_logo.svg')}}" class="w-24 md:w-48" alt="Glósa logo">
                <p class="text-lg font-medium text-gray-600">Welcome to Glósa ! Register</p>
                @error('name')
                    <span class="text-xs tracking-wide text-red-600">
                        {{ $message }}
                    </span> 
                @enderror
                @error('email')
                    <span class="text-xs tracking-wide text-red-600">
                        {{ $message }}
                    </span> 
                @enderror
                @error('password')
                    <span class="text-xs tracking-wide text-red-600">
                        {{ $message }}
                    </span> 
                @enderror
            </div>

            <form  method="POST" action="{{ route('register') }}" class="space-y-6 ">
                @csrf
                <div>
                    <input 
                        type="text" 
                        placeholder="Your Name"
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl"
                        name="name" 
                        required 
                        autocomplete="email" 
                        autofocus
                    >
                </div>
                
                <div>
                    <input 
                        type="email" 
                        placeholder="Your Email"
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl"
                        name="email" 
                        required 
                        autocomplete="email" 
                        autofocus
                    >
                </div>

                <div class="flex flex-col items-end">
                    <input 
                        type="password" 
                        placeholder="Password"
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl"
                        name="password" 
                        required
                        autocomplete="current-password"
                    >
                </div>
                
                <div class="flex flex-col items-end">
                    <input 
                        type="password" 
                        placeholder="Confirm Password"
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl disabled:ring-gray-200"
                        name="password_confirmation" 
                        required
                        autocomplete="current-password"
                    >
                </div>

                <div>
                    <button type="submit" class="w-full px-6 py-3 transition rounded-xl bg-teal-500 hover:bg-teal-600 focus:bg-teal-600 active:bg-teal-800">
                        <span class="text-lg font-semibold text-white">Register</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
