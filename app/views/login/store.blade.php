<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{ HTML::style('css/bootstrap.css'); }}
        {{ HTML::style('css/menu.css'); }}
        {{ HTML::style('css/datepicker.css'); }}
        {{ HTML::script('js/bootstrap.js'); }}
        {{ HTML::script('js/jquery.js'); }}
        <link rel="stylesheet" type="text/css" media="screen"
              href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" type="text/css" media="screen"
              href="css/bootstrap.css">
        <link href="css/bootstrap-combined.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">

                    {{ Form::open(array('url' => 'store-user')) }}

                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <legend>Crear Usuario</legend>
                    <a href="admin-user" class="a">Volver al menu</a>

                    <div class="form-group">
                        {{ Form::label('usuario', 'Nombre de usuario') }}
                        {{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Nombre')); }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('contraseña', 'Contraseña') }}
                        {{ Form::password('password', null, array('class'=>'input-block-level', 'placeholder'=>'Contraseña')); }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Correo') }}
                        {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
                    </div>
                    <div id="datetimepicker" class="input-append date">
                        <!--<input name="cita" type="text"></input>-->
                        {{ Form::text('cita', null, array( 'placeholder'=>'fecha')) }}
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                    </div>
                    {{ Form::label('role_id', 'Role de usuario') }}
                    <select name="role_id" class="form-control">
                        <option value="admin">Administrador</option>
                        <option value="usuario">Usuario</option>
                    </select>

                    {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <script type="text/javascript"
                src="js/bootstrap-datetimepicker.min.js">
        </script>
        <script type="text/javascript">
            $('#datetimepicker').datetimepicker({
                format: 'yyyy/MM/dd',
                language: 'pt-ES'
            });
        </script>
    </body>
</html>
