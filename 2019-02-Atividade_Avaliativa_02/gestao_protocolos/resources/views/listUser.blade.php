{{--<!doctype html>--}}
{{--<html lang="pt-br">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Detalhes do Usuário</title>--}}
{{--</head>--}}
@extends('master.modelo')

@section('title', 'Exibir_Usuario')

@section('content')
<body>

        <p>{{ $user->id }}</p>
        <p>{{ $user->type }}</p>
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>

</body>
@endsection
{{--</html>--}}
