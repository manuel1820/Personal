@extends('layouts.default')

@section('css_stylesheet')
<link rel="stylesheet" type="text/css" href="css/menu.css">

@section('content')

@if(Session::get('msg'))
<div class="alert alert- alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('msg') }}
</div>
@endif

<div class="menu">
    <h1>Bienvenido </h1>
    <a href="logout" class="a">Cerrar sesión</a>
    <a href="register-user"class="caja">
        <p>Crear Usuario</p>
        <i class="usuario"> </i>
    </a>
    <a href="admin-worker" class="caja">
        <p>Administracion del Personal</p>
        <i class="lista"> </i>
    </a>

    <a href="admin-sig" class="caja">
        <p>Sistema de informacion Geografico</p>
        <i class="ele3"> </i>
    </a>

</div>

@stop
