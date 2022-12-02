@extends('layouts.app')

@section('titulo')
{{$post->titulo}}
@endsection

@section('contenido')
<div class="container mx-auto md:flex ">
    <div class="md:w-1/2">
        <img src="{{ asset('uploads'). '/'. $post->imagen}}" alt="Imagen publicacion {{$post->titulo}}">
        <div class="p-3">
            <p> 0 Me gusta </p>
        </div>
        <div>
            <p class="font-bold">{{$post->user->username}}</p>
            <p class="text-sm text-gray-500">{{$post->created_at->diffForHumans()}}</p>
            <p class="mt-5">
                {{$post->descripcion}}
            </p>
        </div>
    </div>
    <div class="md:w-1/2 p-5">
        <div class="shadow bg-white p-5 mb-5">
            @auth
                
            
            <p class="text-xl font-bold text-center mb-4">Escribe un comentario</p>
            <form action="{{route('comentarios.store',['post'=>$post, 'user'=>$user])}}" method="POST">
                @csrf
                <div>
                    <label for="comentario" class="mb-2 block uppercase text-gray-500 font-bold"> 
                    Añade un comentario 
                    </label>
                <textarea
                id="comentario"
                name="comentario"
                placeholder="Agrega un comentario"
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                >
                    
                </textarea>
                @error('comentario')
                    <p class="bg-red-500 text-white my-2 rounded-md text-sm p-2">{{$message}}</p>
                @enderror

                <input type="submit"
            value="Comentar"
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold p-3 text-white rounded-lg w-full"/>
            </div>   
            </form>
            @endauth
        </div>
    </div>
</div>
@endsection