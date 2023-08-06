<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class postusuarios extends Controller
{

    //return vista de post usuarios

    public function post()
    {
        return view('usuario.postusuarios');
    }



/*
  metodo para consumir API y hacer return de usuarios a la view
*/

public function obtenerpost( ){

    $get = HTTP::get('https://jsonplaceholder.typicode.com/posts');
    $usuarios= $get->json();

    return view('usuario.postusuarios', compact('usuarios'));
}

}
