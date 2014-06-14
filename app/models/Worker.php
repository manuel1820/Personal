<?php

class Worker extends Eloquent {

    protected $table = 'trabajador';
    public static $rules = array(
        'nombre' => 'required|alpha|min:2',
        'apellido' => 'required|alpha|min:2',
        'cedula' => 'required|numeric|min:5',
        'telefono' => 'required|numeric|min:5',
        'email' => 'required|email|unique:trabajador');

    public static function validate($data) {
        $reglas = self::$rules;
        $messages = self::$messages;
        return Validator::make($data, $reglas,$messages);
    }

    public function contract() {
        return $this->hasOne('Contract', 'trabajador_id');
    }

    public static $messages = array(
        'nombre.required' => 'El nombre es obligatorio.',
        'nombre.min' => 'El nombre debe contener al menos dos caracteres.',
        'nombre.alpha' => 'El nombre debe contener solo caracteres del alfabeto',
        'apellido.required' => 'El apellido es obligatorio.',
        'apellido.min' => 'El apellido debe contener al menos dos caracteres.',
        'apellido.alpha' => 'El apellido debe contener solo caracteres del alfabeto',
        'email.required' => 'El email es obligatorio.',
        'email.email' => 'El email debe contener un formato válido.',
        'email.unique' => 'El email pertenece a otro usuario.',
        'cedula.required' => 'La cedula es obligatorio.',
        'cedula.numeric' => 'La cedula solo puede ser numérica.',
        'telefono.required' => 'La cedula es obligatorio.',
        'telefono.numeric' => 'La cedula solo puede ser numérica.'
    );

}

?>