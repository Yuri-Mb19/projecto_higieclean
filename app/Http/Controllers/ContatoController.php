<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
   

    public function contato(Request $request) {
/*
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');

      */
/*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->mensagem = $request->input('mensagem');
        //print_r($contato->getAttributes());
        $contato->save();
        */

        //primeira aulas de envio de formularios
       // $contato = new SiteContato();
        //$contato->fill($request->all()); //o gajo

        //print_r($contato->getAttributes());
        //$contato->save();
        return view('site.contato');

    }

    public function salvar(Request $request){

        $request->validate([
            'nome' => 'required|min:3|max:40|',
            'telefone' => 'required',
            'email' => 'email',
            'mensagem' => 'required|max:2000'
        
        ]); 

        
        $contato = new SiteContato();
        $contato->create($request->all());
        
        return redirect()->back()
        ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    }





  

    

     
    
}
