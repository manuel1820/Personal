<?php

class AdminController extends BaseController {

    //al hacer uso de get le decimos a laravel que queremos crear una ruta, 
    //cargar una vista etc
    public function index() {


        return View::make('login.hello');
    }

    public function register() {
        return View::make('login.store');
    }

    public function store() {
        $validator = Validator::make(Input::all(), User::$rules);
        if ($validator->passes()) {
            DB::beginTransaction();
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->role_id= Input::get('role_id');
            $user->cita = Input::get('cita');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            DB::commit();
            return Redirect::to('admin-user')->with(array('msg'=> 'Se ha registrado un nuevo usuario'));
        } else {
            return Redirect::to('register-user')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
        }
    }

}
