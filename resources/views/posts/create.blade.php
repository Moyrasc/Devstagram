@extends('layouts.app')

@section('titulo')
Crear nueva publicación
@endsection

@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
        Imagen Aquí
    </div>
    <div class="md:w-1/2 p-10 bg-white  rounded-lg shadow-xl mt-10 md:mt-0">
        <form action="{{route('register')}}" method="POST" novalidate>
            @csrf
            <div>
                <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold"> 
                    Título 
                </label>
                <input 
                id="titulo" 
                name="titulo" 
                type="text" 
                placeholder="Escribe un título" 
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                value="{{old('titulo')}}"
                    
                
                />
                @error('titulo')
                    <p class="bg-red-500 text-white my-2 rounded-md text-sm p-2">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold"> 
                    Descripción 
                </label>
                <textarea 
                id="descripcion" 
                name="descripcion"
                placeholder="Escribe una descripcion" 
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                {{old('descripcion')}}
                </textarea>
                @error('descripcion')
                    <p class="bg-red-500 text-white my-2 rounded-md text-sm p-2">{{$message}}</p>
                @enderror
            </div>
            <input type="submit"
            value="Crear publicación"
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold p-3 text-white rounded-lg w-full"/>
        </form>
    </div>
</div>
@endsection