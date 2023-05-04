<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoVController extends Controller
{
    //
    public function index(){
        return view('site.produtov');
    }
}
