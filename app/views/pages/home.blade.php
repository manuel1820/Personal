@extends('layouts.default')

@section('js_scripts')
<script type="text/javascript" src="js/home.js"></script>
@stop

@section('content')

<div class="titulo" >
    <div class="title"> <p>Modelo de Portal Web </p></div>
    <!--    {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
        @endif-->
    <div class="login">
        <a href="loguear" class="link" >Iniciar Sesión</a>
        <br>
        <a href="user" class="link" >Registrarse</a>
        <!--<a href="logout">Cerrar sesión.</a>-->
    </div>
    <div class="caja">     
        <a href="#" >
            <i class="view lookbook">
                <div class="mask"></div>
                <div class="info">
                    <h2>Titulo de la informacion</h2>
                    <p>Some description</p>
                </div>
            </i>
        </a>

        <a href="#">
            <i class="view clients">
                <div class="mask"></div>
                <div class="info">
                    <h2>Titulo de la información</h2>
                    <p>Descripcion de esta informacion</p>
                </div>

            </i>
        </a> 

        <a href="#">
            <i class="view attention">
                <div class="mask"></div>
                <div class="info">
                    <h2>Titulo de la información</h2>
                    <br>
                    <p>Esto muestra informacion historica sobre algo</p>
                </div>
            </i>
        </a>
    </div>

    <div class="redes">
        <a href="">
            <div class="twitter"></div>
        </a>
        <a href="">
            <div class="face"></div>
        </a>
        <a href="">
            <div class="pinterest"></div>
        </a>
    </div>

    <div class="relacionado">
        <br>
        <p> Enlaces relacionados</p>
        <br>
        <a href="https://www.google.co.ve/" class="link_re" >Google</a>
        <br>
        <br>
        <a href="https://www.google.co.ve/" class="link_re" >Gobernacion del Estado</a>
        <br>
        <br>
        <a href="https://www.google.co.ve/" class="link_re" >Informacion del Gobierno</a>
        <br>   
        <br>
        <a href="https://www.google.co.ve/" class="link_re" >Seniat</a>
    </div>

</div>
@stop

