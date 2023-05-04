<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Pedido Produto</title>
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
                <p>Adicionar Produtos ao Pedido</p>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('pedido.index')}}">Voltar</a></li>
                    <li><a href="">Consulta</a></li>
                </ul>

            </div>

            <div class="informacao-pagina">
                <h4>Detalhes do pedido</h4>
                <p>ID do pedido: {{ $pedido->id }}</p>
                <p>Cliente: {{ $pedido->cliente_id }}</p> 
                
                <div style="width: 30%; margin-left: auto; margin-right: auto;">
                    <h4>Itens do pedido</h4>
                    <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome do produto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pedido->produtos as $produto)
                                <tr>
                                    <td>{{ $produto->id }}</td>
                                    <td>{{ $produto->nome }}</td>
                                </tr>
                            @endforeach
                        <tbody>
                    </table>
                    @component('app.pedido_produto._components.form_create', ['pedido' => $pedido, 'produtos' => $produtos])
                    @endcomponent 
                </div>
            </div>
        </div>

    </body>
</html> 