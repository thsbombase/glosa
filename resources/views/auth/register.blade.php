@extends('layouts.index')
@section('title','Register')
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0 row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="m-auto">
    <div hidden class="fixed inset-0 w-7/12 bg-amber-200 bg-opacity-70 lg:block ">
        <video class="z-10 object-contain w-full h-full" src="{{asset('video/bg-register.webm')}}" muted autoplay loop preload></video>
    </div>
    <div hidden role="hidden" class="fixed inset-0 w-6/12 ml-auto bg-white bg-opacity-70 backdrop-blur-xl lg:block"></div>
    <div class="relative h-full pt-8 ml-auto lg:w-6/12">
        <div class="px-6 py-12 m-auto sm:p-20 xl:w-10/12">
            <div class="space-y-4">
                <img src="{{asset('img/glòsa_logo.svg')}}" class="w-20 ml-40" alt="Glósa logo">
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
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 "
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
                        placeholder="Password"
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 "
                        name="password" 
                        required
                        autocomplete="current-password"
                    >
                </div>
                
                <div class="flex flex-col items-end">
                    <input 
                        type="password" 
                        placeholder="Confirm Password"
                        class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-1 ring-gray-300 rounded-xl disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 "
                        name="password_confirmation" 
                        required
                        autocomplete="current-password"
                    >
                </div>

                <div>
                    <button type="submit" class="w-full px-6 py-3 transition rounded-xl bg-sky-500 hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-800">
                        <span class="text-lg font-semibold text-white">Register</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
