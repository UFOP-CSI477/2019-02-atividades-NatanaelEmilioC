<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Usuário</title>
</head>
<body>

        <p>{{ $user->id }}</p>
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>

</body>
</html>