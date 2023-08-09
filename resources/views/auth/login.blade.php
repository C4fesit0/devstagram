@extends('layouts.app')

@section('titulo')
    Inicia Sesion en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12">
           <img src="{{asset('img/login.jpg')}}" alt="Imagen login usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{route('login')}}" nonvalidate>
                @csrf
                @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                    {{session('mensaje')}}
                </p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="Tu Email de registro"
                    class=" border p-3 w-full rounded-lg @error('email')
                    border-red-500
                @enderror"/>
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Tu Password de registro"
                    class=" border p-3 w-full rounded-lg @error('password')
                    border-red-500
                @enderror"/>
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-5">

                    <input type="checkbox" id="remember" name="remember"/><label for="remember" class="m-2 text-gray-500 font-bold" >Recordarme</label>
                </div>

                <input type="submit" value="Iniciar Sesion"
                class="bg-sky-600 text-center hover:bg-sky-700
                transition-colors cursor-pointer uppercase font-bold w-full p-3
                 text-white rounded-lg"/>
            </form>
        </div>
    </div>

@endsection
