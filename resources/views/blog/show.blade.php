@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-4xl uppercase font-bold">
              {{ $post->title }}
            </h1>
        </div>
    </div>
    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{$post->user->name }}</span>
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light ">
            {{$post->description}}

        </p>
    </div>
    
@endsection