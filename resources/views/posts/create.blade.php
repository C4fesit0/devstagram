@extends('layouts.app')

@section('titulo')
    Inicia Sesion en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            imagen aqui
        </div>
        <div class="md:w-1/2 px-10 bg-white p-6 rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{route('register')}}" method="POST" nonvalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-4 block uppercase text-gray-500 font-bold">
                        Titulo
                    </label>
                    <input type="text" id="titulo" name="titulo" placeholder="Titulo de la Publicacion"
                    class=" border p-3 w-full rounded-lg
                    @error('name')
                        border-red-500
                    @enderror"
                    value="{{@old('titulo')}}"
                    />
                    @error('titulo')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-4 block uppercase text-gray-500 font-bold">
                        Descripcion
                    </label>
                    <textarea id="descripcion" name="descripcion"
                    placeholder="Descripcion de la Publicacion"
                    class=" border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                    </textarea>
                    @error('titulo')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <input type="submit" value="Crear Publicacion"
                class="bg-sky-600 text-center hover:bg-sky-700
                transition-colors cursor-pointer uppercase font-bold w-full p-3
                 text-white rounded-lg"/>
            </form>
        </div>
    </div>
@endsection

@section('footer')

@endsection
