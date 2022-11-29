@extends('layouts.app')

@section('titulo')
Crea tu cuenta Devstagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center ">
    <div class="md:w-6/12 p-5">
       <img src="{{asset('img/login.jpg')}}" alt="imagen registro usuario"/>
    </div>
    <div class="md:w-4/12  bg-white p-5 rounded-lg shadow-x">
        <form action="{{route('register')}}" method="POST" novalidate>
            @csrf
            <div>
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold"> 
                    Nombre 
                </label>
                <input 
                id="name" 
                name="name" 
                type="text" 
                placeholder="Nombre" 
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                value="{{old('name')}}"
                    
                
                />
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-md text-sm p-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold"> 
                    Usuario 
                </label>
                <input 
                id="username" 
                name="username" 
                type="text" 
                placeholder="Nombre Usuario" 
                class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                value="{{old('username')}}"
                />
                
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-md text-sm p-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold"> 
                    Email 
                </label>
                <input 
                id="email" 
                name="email" 
                type="email" 
                placeholder="Correo electrónico" 
                class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                value="{{old('email')}}"
                />
                
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-md text-sm p-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold"> 
                    Contraseña 
                </label>
                <input 
                id="password" 
                name="password" 
                type="password" 
                placeholder="Contraseña" 
                class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                value="{{old('password')}}"
                />
                
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-md text-sm p-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold"> 
                    Repetir Contraseña 
                </label>
                <input 
                id="password_confirmation" 
                name="password_confirmation" 
                type="password" 
                placeholder="Repite la Contraseña" 
                class="border p-3 w-full rounded-lg"
                />
            </div>
            <input type="submit"
            value="Crear cuenta"
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold p-3 text-white rounded-lg w-full"/>
        </form>
    </div>

</div>
@endsection