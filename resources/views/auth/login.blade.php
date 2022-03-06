@extends('layouts.index')
@section('title','Login')
@section('content')

<div class="m-auto 2xl:container">
    <div hidden class="fixed inset-0 w-7/12 lg:block">
        <video class="object-cover w-full h-full" src="{{asset('video/bg-login.webm')}}" muted autoplay loop preload></video>
    </div>
    <div hidden role="hidden" class="fixed inset-0 w-6/12 ml-auto bg-white bg-opacity-70 backdrop-blur-xl lg:block"></div>
    <div class="relative h-full pt-16 ml-auto lg:w-6/12">
        <div class="px-6 py-12 m-auto sm:p-20 xl:w-10/12">
            <div class="space-y-4">
                <img src="{{asset('img/glòsa_logo.svg')}}" class="w-20 ml-40" alt="Glósa logo">
                <p class="text-lg font-medium text-gray-600">Welcome to Glósa ! Login</p>
                @error('email')
                    <span class="text-xs tracking-wide text-red-600">
                        {{ $message }}
                    </span> 
                @enderror
            </div>

            <form  method="POST" action="{{ route('login') }}" class="space-y-6 ">
                @csrf
                <div>
                    <input 
                        type="email" 
                        placeholder="Your Email"
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 "
                        name="email" 
                        required 
                        autocomplete="email" 
                        autofocus
                    >
                </div>

                <div class="flex flex-col items-end">
                    <input 
                        type="password" 
                        placeholder="What's the secret word ?"
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 "
                        name="password" 
                        required
                        autocomplete="current-password"
                    >
                </div>

                <div>
                    <button type="submit"class="w-full px-6 py-3 transition rounded-xl bg-sky-500 hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-800">
                        <span class="text-lg font-semibold text-white">Login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
