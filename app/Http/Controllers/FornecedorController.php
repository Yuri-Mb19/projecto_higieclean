<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
class FornecedorController extends Controller
{
    //
    public function index(){
        return view('app.fornecedor.index');
    }

    public function listar(Request $request){
        $fornecedores = Fornecedor::with(['produtos'])->where('nome', 'like', '%'.$request->input('nome').'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('uf', 'like', '%'.$request->input('uf').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->get();

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores]);
        return view('app.fornecedor.listar');
    }

    public function adicionar(Request $request){
        
        $msg = '';
            //inclusao
        if($request->input('_token') != '' && $request->input('id') == ''){
            //validando os dados
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'

            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchida',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo uf deve ter no mínimo 2 caracteres',
                'uf.max' => 'O campo uf deve ter no máximo 2 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente'


            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso';
        }
        //edicao
        if($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $updated = $fornecedor->update($request->all());

            if($updated){
                $msg = 'Atualizaçao realizado com sucesso';
            }else {
                $msg = 'Erro ao tentar atualizar';
            }

            return view('app.fornecedor.adicionar' , ['msg' => $msg]);      
        }

        
        return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg]);
    }

    public function editar($id, $msg = ''){

       $fornecedor = Fornecedor::find($id);
        
       return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }

    public function excluir($id){
        
        Fornecedor::find($id)->delete();
        //Fornecedor::find($id)->forceDelete();
        return redirect()->route('app.fornecedor');
    }
}
