<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicoController extends Controller
{
    //
    public function Servico(){
       $usuario = DB::select("SELECT * FROM usuario");
       //dd($usuario);

       foreach ($usuario as $usuario) {
        echo '<p>' .$usuario->id. '</p>';
        echo '<p>' .$usuario->nome. '</p>';
        echo '<p>' .$usuario->email. '</p>';
        echo '<p>' .$usuario->telefone. '</p>';
        echo '<p>' .$usuario->mensaguem. '</p>';
       }
    }
    
}
