<?php

namespace App\Http\Controllers;
use App\usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
 public function insertarUsuario(){
    //
    $this->validate(request(),['nombre'=>"bail|required|string"]);
    $this->validate(request(),['apellido'=>"bail|required|string"]);
    $this->validate(request(),['email'=>"bail|required|string|unique:usuarios"]);


    $nombre = request()->get('nombre');
    $apellido = request()->get('apellido');
    $email = request()->get('email');


    $usuario = new usuario();
    $usuario-> nombre = $nombre;
    $usuario-> apellido = $apellido;
    $usuario-> email = $email;

    $usuario->save();

    return(view('/contact'));
    }  


}
