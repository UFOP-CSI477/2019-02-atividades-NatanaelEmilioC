<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Formulário de Cadastro de Protocolos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="style.css" />-->
</head>
<body>
<div class="container" >
    <div class="content">
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
            <form method="post" action="{{ route('subject.store') }}">
                @csrf
                <h1>Cadastro</h1>

                <p>
                    <label for="name">Nome do Protocolo: </label>
                    <input id="name" name="name" required="required" type="text" placeholder="nome" />
                </p>

                <p>
                    <label for="price">Preço: </label>
                    <input id="price" name="price" required="required" type="text" placeholder="1 ou 2" />
                </p>
                <p>
                    <input type="submit" value="Cadastrar Usuário"/>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
