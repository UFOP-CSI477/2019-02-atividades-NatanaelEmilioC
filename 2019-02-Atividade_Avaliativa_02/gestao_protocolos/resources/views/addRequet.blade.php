<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Formulário de Cadastro de Requisição</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="style.css" />-->
</head>
<body>
<div class="container" >
    <div class="content">
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
            <form method="post" action="{{ route('requet.store') }}">
                @csrf
                <h1>Cadastro de Requisição</h1>

                <p>
                    <label for="user_id">User ID: </label>
                    <input id="user_id" name="user_id" required="required" type="number" placeholder="nome" />
                </p>

                <p>
                    <label for="subject_id">Prolocolo ID: </label>
                    <input id="subject_id" name="subject_id" required="required" type="number" placeholder="1 ou 2" />
                </p>
               <p>
                    <label for="description">Descrição: </label>
                    <input id="description" name="description" required="required" type="text" placeholder="1 ou 2" />
                </p>
               <p>
                    <label for="date">Data: </label>
                    <input id="date" name="date" required="required" type="date" placeholder="1 ou 2" />
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
