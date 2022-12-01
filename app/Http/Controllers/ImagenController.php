<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file('file');

        $nombreImagen = Str::uuid() . "." . $imagen->extension();
        // Esta clase nos permite crear una imagen de intervetion image
        $imagenServidor = Image::make($imagen);
        //Efecto de intervetion image
        $imagenServidor->fit(1000, 1000);
        //Mover la imagen al servidor (ya que la img se queda en memoria un tiempo)
        $imagenPath = public_path('uploads') . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        return response()->json(['imagen' => $nombreImagen]);
    }
}
