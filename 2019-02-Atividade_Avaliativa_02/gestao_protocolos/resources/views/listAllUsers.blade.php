<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Usuários</title>
</head>
<body>
<table>
    <tr>
        <td>#ID: </td>
        <td>Nome: </td>
        <td>E-mail: </td>
        <td>Ações: </td>
    </tr>

    @foreach($users as $user)

    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.list', ['user' => $user->id]) }}">Ver Usuário</a>
            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="user" value="{{ $user->id }}">
                <input type="submit" value="Remover">
            </form>
        </td>
    </tr>
        @endforeach
</table>
</body>
</html>
