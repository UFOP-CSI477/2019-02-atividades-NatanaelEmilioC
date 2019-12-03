<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gerenciado de Protocolos - @yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">Área Geral</a>-->
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('area_geral') }}">Área Geral</a></li>
                    <li><a href="{{route('area_admin')}}">Área Administrativa</a></li>
                    <li><a href="{{ route('area_usuario') }}">Área Usuário</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    @yield('content')
</div>

<footer class="page-footer">
    <div class="footer navbar-fixed-bottom footer-copyright text-center py-3">© {{date('Y')}} Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> natanaelemilo@gmail.com</a>
    </div>
</footer>

</body>
</html>
