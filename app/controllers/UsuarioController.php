<?php

class UsuarioController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Controlador de los usuarios
      |--------------------------------------------------------------------------
     */

    public function index() {

        return View::make('usuario.index');
    }

    public function generar() {

        $nombre = Auth::user()->username;
        $correo = Auth::user()->email;
        $style = '<style>table,th,td{border:1px solid black;
            border-collapse:collapse;text-align:center;}
th,td{padding:5px;}th{text-align:center;}</style>';

        $html = '<html><head>' . $style . '</head><body>';
        $html.= '<table border="1" style="width:300px">';
        $html.= '<tr>';
        $html.= '<td>Nombre</td>';
        $html.= '<td>Correo</td>';
        $html.= '<td>Fecha</td>';
        $html.= '</tr>';
        $html.= '<tr>';
        $html.= '<td>' . $nombre . '</td>';
        $html.= '<td>' . $correo . '</td>';
        $html.= '<td> HOYYYYYYYYYYYYY </td>';
        $html.= '</tr>';
        $html.= '</table>';
        $html.= '</body></html>';
        return PDF::load($html, 'A4', 'portrait')->download('datos');
    }

    public function carrusel() {
        return View::make('usuario.carrusel');
    }

}
