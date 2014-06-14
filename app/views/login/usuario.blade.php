<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de citas para tramite</title>
    {{ HTML::style('css/bootstrap.css'); }}
</head>
<body>
    <div class="container">
        <h1>Bienvenido {{ $nombre; }}</h1>
        <a href="logout">Cerrar sesión.</a>
    </div>
    <script src="js/jquery.js"></script>
    {{ HTML::script('js/bootstrap.js'); }}
</body>
</html>