<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action={{ route('site.login') }} method="post">
            @csrf
            <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
            {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
            <br><br>
            <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="borda-preta">
            {{ $errors->has('senha') ? $errors->first('senha') : '' }}
            <br><br>
            <button type="submit" class="borda-preta">Acessar</button>
        </form>
        {{ isset($erro) && $erro != '' ? $erro : '' }}
    </div>
</body>
</html>