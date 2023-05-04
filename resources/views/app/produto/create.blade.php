<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Registo de produtos</title>
        <meta charset="utf-8">

        <style>

            html, body {
                height: 100%;
                margin: 0;
                font-family: 'Roboto', sans-serif;
            }

            p, span {
                color: #ffffff;
            }

           

            input, select, textarea, button {
                width: 100%;
                padding: 10px 15px;
                margin: 10px 0px 10px 0px;
                box-sizing: border-box;
                border-radius: 3px;
                background-color: transparent;
                color: #333;
            }

            .texto-branco {
                color: #ffffff;
            }

            .borda-branca {
                border: solid 1px #fff;
            }

            .borda-preta {
                border: solid 1px #333;
            }

            button {
                background-color: #7ab829;
                cursor: pointer;
                color: #fff;
            }

            button:hover {
                background-color: #6ea22c;
            }

            ::placeholder {
                color: #333333;
                opacity: 1;
            }

            :-ms-input-placeholder {
                color: #333333;
            }

            ::-ms-input-placeholder {
                color: #333333;
            }

            .topo {
                width: 100%;
                background-color: #f8f8f8;
                position: absolute;
                padding: 20px 0px 10px 0px;
            }

         
            .menu {
                float: right;
                margin-right: 40px;
            }

            .menu li {
                display: inline;
                float: left;
            }

            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .menu a {
                text-decoration: none;
                padding: 14px 16px;
                color: #333;
            }

            .menu a:hover {
                color: #268fd0;
            }

            .conteudo-destaque {
                width: 100%;
                height: 100%;
                min-height: 800px; 
            }

           

            .informacoes, .contato {
                margin: 100px 40px 40px 40px;
            }

            .contato-principal {
                margin: 0px 60px 60px 40px;
            }

            

           

            .conteudo-pagina {
                width: 100%;
                height: 100%;
                text-align: center;
                margin-bottom: 100px;
            }

            .titulo-pagina {
                padding: 70px 0px 10px 0px;
                margin-bottom: 10px;
                background-color: #2a9ee2;
                text-align: center;
            }

            .informacao-pagina {
                text-align: center;
                margin-top: 30px;
            }

            .informacao-pagina p{
                color: #333;
            }

           

        </style>
    </head>

    <body>
        <div class="topo">

            <div class="menu">
                <ul>
                    <li><a href="{{ route('app.home') }}">Home</a></li>
                    <li><a href="{{ route('cliente.index') }}">Cliente</a></li>
                    <li><a href="{{ route('pedido.index') }}">Pedido</a></li>
                    <li><a href="{{ route('produto.index') }}">Produto</a></li>
                    <li><a href="{{ route('app.fornecedor') }}">Fornecedor</a></li>
                    <li><a href="{{ route('app.sair') }}">sair</a></li>
                </ul>
            </div>
        </div>

        <div class="counteudo-pagina">
            <div class="titulo-pagina">
                @if(isset($produto->id))
                    <p>Editar Produto</p>
                @else
                    <p>Adicionar Produtos</p>
                @endif    
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('produto.index')}}">Voltar</a></li>
                    <li><a href="">Consulta</a></li>
                </ul>

            </div>

            <div class="informacao-pagina">
                <div style="width: 30%; margin-left: auto; margin-right: auto;">

                    @if(isset($produto->id))
                        <form method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
                            @csrf
                            @method('PUT')
                    @else
                        <form method="post" action="{{ route('produto.store') }}">
                            @csrf
                    @endif
                    
                        <select name="fornecedor_id">
                            <option>-- Selecione um Fornecedor --</option>
                    
                            @foreach($fornecedores as $fornecedor)
                                <option value="{{ $fornecedor->id }}" {{ ($produto->fornecedor_id ?? old('fornecedor_id')) == $fornecedor->id ? 'selected' : '' }} >{{ $fornecedor->nome }}</option>
                            @endforeach
                        </select>
                        {{ $errors->has('fornecedor_id') ? $errors->first('fornecedor_id') : '' }}
                    
                        <input type="text" name="nome" value="{{ $produto->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
                        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    
                        <input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" placeholder="Descrição" class="borda-preta">
                        {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
                    
                        <input type="text" name="peso" value="{{ $produto->peso ?? old('peso') }}"  placeholder="peso" class="borda-preta">
                        {{ $errors->has('peso') ? $errors->first('peso') : '' }}
                    
                        <select name="unidade_id">
                            <option>-- Selecione a Unidade de Medida --</option>
                    
                            @foreach($unidades as $unidade)
                                <option value="{{ $unidade->id }}" {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }} >{{ $unidade->descricao }}</option>
                            @endforeach
                        </select>
                        {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}
                        
                        <button type="submit" class="borda-preta">Cadastrar</button>
                    <form>
                </div>
            </div>
        </div>

    </body>
</html> 