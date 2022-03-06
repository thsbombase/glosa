@extends('layouts.index')
@section('title','Edit Note')
@section('content')
<section class="m-8">
    <div class="flex mb-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <div class="flex items-center">
                    <a href="{{route('viewnote')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Back</a>
                </div>
            </li>
            <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 ">Edit Note</span>
            </div>
            </li>
        </ol>
    </div>

    <div class="grid max-w-full grid-cols-1 gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow-md">
        <h1 class="font-semibold">Title</h1>
        <input class="w-full px-6 py-3 placeholder-gray-600 transition bg-transparent ring-2 ring-gray-300 rounded-xl" type="text" name="title" id="title"  placeholder="Enter Title">
        {{ csrf_field() }}
        <h1 class="font-semibold">Note</h1>
        <div class="rounded ring-2 ring-gray-300">
            <div id="editorjs"></div>
        </div>
        <button type="button" class="px-4 py-3 text-lg font-medium text-center text-white bg-teal-600 rounded-lg cursor-pointer md:px-8 md:py-3 md:mr-2 md:text-xl hover:bg-teal-700 focus:ring-teal-800" id="save">Update</button>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/inline-code@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/underline@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
{{-- <script>
const editor = new EditorJS({
        holder: 'editorjs',
        
        tools:{
            list: {
                class: List,
                inlineToolbar: true,
                shortcut: 'CMD+SHIFT+L'
            },
            quote: {
                class: Quote,
                inlineToolbar: true,
                shortcut: 'CMD+SHIFT+O'
            },
            inlineCode: {
                class: InlineCode,
                shortcut: 'CMD+SHIFT+C'
            },
            underline: {
                class: Underline,
                shortcut: 'CMD+SHIFT+U'
            },
            embed: {
                class: Embed,
                inlineToolbar: true,
                config: {
                    services: {
                        youtube: true,
                        coub: true,
                        soundcloud: true
                    }
                },
                shortcut: 'CMD+SHIFT+E'
            },
            header: {
                class: Header,
                inlineToolbar: true,
                shortcut: 'CMD+SHIFT+H'
            }
        },
        data: {!! $section->content !!}
    });
    const id = {!! $section->id !!}
    const save = (event) => {
        event.preventDefault();
        document.querySelector('#save').setAttribute('disabled', 'true');
        document.querySelector('#save').innerText = 'Saving...';
        const token = document.querySelector('input[name="_token"]').value;
        const title = document.querySelector('#title').value;
        editor.save().then((outputData) => {
            fetch('/api/v1/editSection', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": token
                },
                body: JSON.stringify({
                    id: id,
                    title: title,
                    content: outputData,
                })
            }).then(res => {
                console.log(res);
            })
        });

        window.location.href = '/dashboard';
}
document.querySelector('#save').addEventListener('click', save);
</script> --}}
@endsection