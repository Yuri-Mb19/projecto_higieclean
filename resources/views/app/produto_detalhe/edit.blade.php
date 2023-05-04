<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Detalhes do Produto</title>
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
                <p>Editar Detalhes do Produto</p>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="">Voltar</a></li>
                 
                </ul>

            </div>

            <div class="informacao-pagina">
                
                <h4>Produto</h4>
                <div>Nome: {{ $produto_detalhe->produto->nome }}</div>
                <br>
                <div>Descrição: {{ $produto_detalhe->produto->descricao }}</div>
                <br>
    

                <div style="width: 30%; margin-left: auto; margin-right: auto;">
                    @if(isset($produto_detalhe->id))
                        <form method="post" action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produto_detalhe->id]) }}">
                            @csrf
                            @method('PUT')
                    @else
                        <form method="post" action="{{ route('produto-detalhe.store') }}">
                            @csrf
                    @endif
                        <input type="text" name="produto_id" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}" placeholder="ID do Produto" class="borda-preta">
                        {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
                    
                        <input type="text" name="comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}" placeholder="Comprimento" class="borda-preta">
                        {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}
                    
                        <input type="text" name="largura" value="{{ $produto_detalhe->largura ?? old('largura') }}"  placeholder="Largura" class="borda-preta">
                        {{ $errors->has('largura') ? $errors->first('largura') : '' }}
                    
                        <input type="text" name="altura" value="{{ $produto_detalhe->altura ?? old('altura') }}"  placeholder="Altura" class="borda-preta">
                        {{ $errors->has('altura') ? $errors->first('altura') : '' }}
                    
                        <select name="unidade_id">
                            <option>-- Selecione a Unidade de Medida --</option>
                    
                            @foreach($unidades as $unidade)
                                <option value="{{ $unidade->id }}" {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }} >{{ $unidade->descricao }}</option>
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