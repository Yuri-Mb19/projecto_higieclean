<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ContatoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[\App\Http\Controllers\PrincipalController::class,'Principal'])
->name('site.index');


Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'salvar'])->name('site.contato');
Route::get('/produtov',[\App\Http\Controllers\ProdutoVController::class,'index'])->name('site.produtov');
Route::get('/servico',[\App\Http\Controllers\ServicoController::class,'servico'])->name('site.servico');
Route::get('/galeria_img',[\App\Http\Controllers\Galeria_imgController::class,'galeria_img'])->name('site.galeria_img');
Route::get('/login/{erro?}',[\App\Http\Controllers\LoginController::class,'login'])->name('site.login');
Route::post('/login',[\App\Http\Controllers\LoginController::class,'autenticar'])->name('site.login');

Route::middleware('autenticacao')->prefix('/app')->group(function() {
    Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('app.home');
    Route::get('/sair',[\App\Http\Controllers\LoginController::class,'sair'])->name('app.sair');
   
    //Fornecedor
    Route::get('/fornecedor',[\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedor');
    Route::post('/fornecedor/listar',[\App\Http\Controllers\FornecedorController::class,'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/listar',[\App\Http\Controllers\FornecedorController::class,'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar',[\App\Http\Controllers\FornecedorController::class,'adicionar'])->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar',[\App\Http\Controllers\FornecedorController::class,'adicionar'])->name('app.fornecedor.adicionar');

    Route::get('/fornecedor/editar/{id?}/{msg?}',[\App\Http\Controllers\FornecedorController::class,'editar'])->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}',[\App\Http\Controllers\FornecedorController::class,'excluir'])->name('app.fornecedor.excluir');

    // Rotas de App produtos

    //Route::get('/produto',[\App\Http\Controllers\ProdutoController::class,'index'])->name('app.produto');
   // Route::get('/produto/create',[\App\Http\Controllers\ProdutoController::class,'create'])->name('app.produto');
    
    //Produto 
   Route::resource('produto', App\Http\Controllers\ProdutoController::class);

   //Produto detalhes
   Route::resource('produto-detalhe', App\Http\Controllers\ProdutoDetalheController::class);
   
   
  
   //Route::resource('prodido-produto', App\Http\Controllers\PediddoProdutoController::class);
   Route::resource('cliente', App\Http\Controllers\ClienteController::class);
   Route::resource('pedido', App\Http\Controllers\PedidoController::class);

   Route::get('/pedido-produto/create/{pedido}',  [App\Http\Controllers\PedidoProdutoController::class, 'create'])->name('pedido-produto.create');
   Route::post('/pedido-produto/store/{pedido}',  [App\Http\Controllers\PedidoProdutoController::class, 'store'])->name('pedido-produto.store');

});



Route::fallback(function(){
    echo 'A rota acessada Não Existe. <a href="'.route('site.index').'">clique aqui</a> para voltar a pagina iniscial';
});



