<?php

class AuthController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Controlador de la autenticación de usuarios
      |--------------------------------------------------------------------------
     */

    public function showLogin() {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check()) {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return View::make('login.index');

            //return Redirect::to('/') ->with('mensaje_error', 'Tus datos son correctos');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login.index');
    }

    public function logOut() {
        Auth::logout();
        Session::flush();
        return Redirect::to('/')
                        ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

    public function postLogin() {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'email' => Input::get('username'),
            'password' => Input::get('password')
        );
        $usuario= array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if ( Auth::attempt($userdata, Input::get('remember-me', 0)) ||  Auth::attempt($usuario, Input::get('remember-me', 0)) ){
            if (Auth::user()->role_id == "usuario")
            {
               return Redirect::to('user');
            }
            else if(Auth::user()->role_id == "admin"){
                return Redirect::to('admin-user');
            }

        }
        return Redirect::to('loguear')
                        ->with('mensaje_error', 'Tus datos son incorrectos')
                        ->withInput();
    }

}
