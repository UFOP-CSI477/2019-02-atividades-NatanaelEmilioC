{{--<!doctype html>--}}
{{--<html lang="pt-br">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Listagem de Usuários</title>--}}
{{--</head>--}}
{{--<body>--}}
@extends('master.modelo')

@section('title', 'Visualizar_Usuarios')

@section('content')
<table>
    <tr>
        <td>#ID: </td>
        <td>Nome: </td>
        <td>E-mail: </td>
        <td>Tipo: </td>
        <td>Ações: </td>
    </tr>

    @foreach($users as $user)

    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->type }}</td>

        <td>
            <a href="{{ route('user.show', ['user' => $user->id]) }}">Ver Usuário</a>

            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="user" value="{{ $user->id }}">
                <input type="submit" value="Remover">
            </form>

            <form action="{{ route('user.edit', ['user' => $user->id]) }}" method="get">
                <input type="hidden" name="user" value="{{ $user->id }}">
                <input type="submit" value="Editar">
            </form>

        </td>
    </tr>
        @endforeach
</table>
@endsection
{{--</body>--}}
{{--</html>--}}
