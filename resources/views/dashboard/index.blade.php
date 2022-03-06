@extends('layouts.index')
@section('title','Dashboard')
@section('content')
<section class="w-full overflow-x-hidden">
    <div class="hidden w-full mx-20 my-8 md:block">
        <a class="px-4 py-3 text-lg font-medium text-center text-white bg-teal-600 rounded-lg cursor-pointer md:px-8 md:py-3 md:mr-2 md:text-xl hover:bg-teal-700 focus:ring-teal-800" 
        href="{{route('createnote')}}">
            Create a note
        </a>
    </div>
    <div class="grid grid-cols-1 gap-4 my-8 md:grid-cols-2 lg:grid-cols-4 md:gap-10 md:mx-20 justify-evenly">
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="{{route('viewnote')}}" class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
    </div>

    <div class="relative md:hidden">
        <form action="{{route('createnote')}}" >
            <button class="fixed w-12 h-12 transition duration-200 ease-in bg-teal-600 rounded-full shadow bottom-10 right-6 hover:bg-teal-700 active:shadow-lg mouse focus:outline-none"
                type="submit">
                <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="inline-block w-8 h-4 mr-1">
                    <path fill="#FFFFFF" 
                            d="M17.561,2.439c-1.442-1.443-2.525-1.227-2.525-1.227L8.984,7.264L2.21,14.037L1.2,18.799l4.763-1.01
                            l6.774-6.771l6.052-6.052C18.788,4.966,19.005,3.883,17.561,2.439z M5.68,17.217l-1.624,0.35c-0.156-0.293-0.345-0.586-0.69-0.932
                            c-0.346-0.346-0.639-0.533-0.932-0.691l0.35-1.623l0.47-0.469c0,0,0.883,0.018,1.881,1.016c0.997,0.996,1.016,1.881,1.016,1.881
                            L5.68,17.217z"/>
                </svg>
            </button>
        </form>
    </div>
</section>
@endsection
