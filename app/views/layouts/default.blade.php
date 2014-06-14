<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" >
        <title>@yield("title")</title>
        <link href='http://fonts.googleapis.com/css?family=Exo:400,500,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="img/mundoico.jpg">

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/moderniz.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
        @yield("css_stylesheet")
        @yield("js_scripts")
    </head>
    <body>

        <!--<div class="wrapper" style="">-->
        @yield("content")

        <!--</div>-->
        @yield("js_extra_script")
        <script type="text/javascript">

            $("img").lazyload({
                effect: "fadeIn"
            });


            $(document).ready(function() {

            });

        </script>
    </body>
</html>