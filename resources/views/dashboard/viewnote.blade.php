@extends('layouts.index')
@section('title','TODO: title of note')
@section('content')
<section class="m-8">
    <div class="flex mb-4 w-full" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3 w-full">
            <li>
                <div class="flex items-center">
                    <a href="{{route('dashboard')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Dashboard</a>
                </div>
            </li>
            <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 ">TODO: title of note</span>
            </div>
            </li>
        </ol>
        <div class="self-end">
        <a class="px-3 py-2 text-sm md:px-6 md:py-2  md:text-lg font-medium text-center text-white bg-teal-600 rounded-lg cursor-pointer hover:bg-teal-700 focus:ring-teal-800" 
        href="{{route('editnote')}}">
            Edit
        </a>
        </div>
    </div>

    <div class="p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md grid grid-cols-1 gap-4">
        <h1 class="font-semibold text-3xl">Title</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus neque nisi, ut tempus quam aliquam nec. Donec rhoncus augue nec rhoncus rutrum. Fusce sagittis, ex eget facilisis bibendum, libero tortor scelerisque ligula, vitae dapibus risus tortor eget eros. Donec quis arcu vehicula, varius ante id, mollis tortor. Nulla lectus magna, fringilla eget ullamcorper non, venenatis eu ligula. Maecenas eget ante tortor. Etiam vel leo id augue laoreet rhoncus at ac lectus. Vestibulum blandit lectus ac nisl mollis tincidunt. Proin mattis commodo nisl, vitae convallis nisi placerat cursus.
        </p>
        <p>
            Vivamus eu pellentesque tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ac lectus sed nunc sollicitudin accumsan vitae eu ipsum. Fusce consectetur interdum turpis, a dictum ante interdum eu. Fusce iaculis libero at tellus ultricies condimentum. Donec velit dolor, porttitor vel ultrices eu, fringilla et risus. Vivamus rhoncus, libero eget luctus finibus, nisl metus faucibus lacus, eget ornare sapien nibh vitae sapien. Aliquam et nisi neque. Maecenas elementum rutrum lectus. Sed id metus purus. Quisque consequat cursus ex eu volutpat. Donec porttitor lorem in ante malesuada vehicula. Donec sagittis magna in erat molestie volutpat. Aliquam hendrerit ac tellus sit amet hendrerit.
        </p>
        <p>
            Ut ut tellus sit amet mi euismod ultricies id a diam. Fusce at massa viverra tortor pharetra consectetur vitae sed ipsum. Praesent vel magna magna. Aliquam erat volutpat. Integer sit amet massa varius, tincidunt eros id, tempor est. Donec fermentum, erat nec porttitor facilisis, est orci varius nibh, dapibus imperdiet nisl ante nec orci. Vestibulum ac tempor neque. Nulla at justo arcu. Sed orci mi, fermentum efficitur tincidunt sit amet, eleifend sed diam. Proin suscipit vehicula velit non semper. Ut suscipit risus sit amet justo consectetur, a mattis risus lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam posuere magna in metus porta, ac tincidunt nisl consequat. Ut quis odio cursus, malesuada magna eget, interdum libero. Suspendisse potenti. Donec dictum sollicitudin vehicula.
        </p>
    </div>
</section>
@endsection