{{--<!DOCTYPE html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8" />--}}
{{--    <title>Formulário de Cadastro de Usuário</title>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <!--<link rel="stylesheet" type="text/css" href="style.css" />-->--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container" >--}}
{{--    <div class="content">--}}
{{--        <!--FORMULÁRIO DE CADASTRO-->--}}
@extends('master.modelo')

@section('title', 'Cadastro_Usuario')

@section('content')
        <div id="cadastro">
            <form method="post" action="{{ route('user.store') }}">
                @csrf
                <p>
                    <label for="tipo_cad">Tipo</label>
                    <input id="tipo_cad" name="tipo_cad" required="required" type="text" placeholder="1 ou 2" />
                </p>

                <p>
                    <label for="nome_cad">Seu nome</label>
                    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
                </p>

                <p>
                    <label for="email_cad">Seu e-mail</label>
                    <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/>
                </p>

                <p>
                    <label for="senha_cad">Sua senha</label>
                    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
                </p>

                <p>
                    <input type="submit" value="Cadastrar Usuário"/>
                </p>
            </form>
        </div>
@endsection
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
