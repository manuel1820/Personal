<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{ HTML::style('css/bootstrap.css'); }}
        {{ HTML::style('css/datepicker.css'); }}
        {{ HTML::script('js/bootstrap.js'); }}
        {{ HTML::script('js/jquery.js'); }}
        <link rel="stylesheet" type="text/css" href="css/menu.css">

    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                    @if(Session::has('mensaje_error'))
                    <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                    @endif
                    {{ Form::open(array('url' => '/login')) }}
                    <legend>Iniciar sesión</legend>

                    <a href="/laravel/public" class="a">Volver al inicio</a>
                    <div class="form-group">
                        {{ Form::label('usuario', 'Nombre de usuario') }}
                        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('contraseña', 'Contraseña') }}
                        {{ Form::password('password', array('class' => 'form-control')); }}
                    </div>
                    <div class="checkbox">
                        <label>
                            Recordar contraseña
                            {{ Form::checkbox('rememberme', true) }}
                        </label>
                    </div>
                    {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </body>
</html>