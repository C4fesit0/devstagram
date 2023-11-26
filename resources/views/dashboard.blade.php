@extends('layouts.app')

@section('titulo')
    Perfil: {{$user->username}}
@endsection


@section('contenido')

<div class="flex justify-content-center">
    <div class="w-full md:8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
        <div class="w-8/12 lg:w-6/12 px-5">
            <img src="{{asset('img/usuario.svg')}}" alt="imagen usuario">
        </div>
        <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center justify-center md:py-10">
            <p class="text-gray-700 text-2xl">{{auth()->user()->username}}</p>
            <p class="text-gray-800 text-sm mb-3 font-bold">
                0
                <span>Seguidores</span>
            </p>
            <p class="text-gray-800 text-sm mb-3 font-bold">
                0
                <span>Siguiendo</span>
            </p>
            <p class="text-gray-800 text-sm mb-3 font-bold">
                0
                <span>Posts</span>
            </p>
        </div>
    </div>
</div>

<section class="container mx-auto mt-10">
    <h2 class="text-4xl text-center font-black my-10">Publicaciones</h2>
    @if ($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
            <div>
                <a href="{{route('posts.show',['post' => $post, 'user'=> $user])}}">
                    <img src="{{ asset('uploads').'/'.$post->imagen}}" alt="{{$post->titulo}}"></img>
                </a>
            </div>
            @endforeach
        </div>
        <div class="my-10">
            {{$posts->links('pagination::tailwind')}}
        </div>
    @else
        <p class="text-gray-600 uppercase text-sm font-bold ">No hay posts</p>
    @endif
</section>

@endsection
