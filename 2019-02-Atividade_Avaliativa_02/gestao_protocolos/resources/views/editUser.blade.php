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

@section('title', 'Editar_Usuario')

@section('content')
        <div id="cadastro">
            <form method="post" action="{{ route('user.update',['user' => $user->id]) }}">
                @csrf
                @method('PUT')
                <p>
                    <label for="nome_edit">Tipo de Usuário</label>
                    <input value="{{ $user->type }}" id="tipo_edit" name="tipo_edit" required="required" type="text" placeholder="1 ou 2" />
                </p>

                <p>
                    <label for="nome_edit">Seu nome</label>
                    <input value="{{ $user->name }}" id="nome_edit" name="nome_edit" required="required" type="text" placeholder="nome" />
                </p>

                <p>
                    <label for="email_edit">Seu e-mail</label>
                    <input value="{{ $user->email }}" id="email_edit" name="email_edit" required="required" type="email" placeholder="contato@htmlecsspro.com"/>
                </p>

                <p>
                    <label for="senha_edit">Sua senha</label>
                    <input id="senha_edit" name="senha_edit" required="required" type="password" placeholder="ex. 1234"/>
                </p>

                <p>
                    <input type="submit" value="Editar Usuário"/>
                </p>
            </form>
        </div>
@endsection
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
