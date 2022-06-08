<?php

namespace App\Services\Implemetations;

use App\Services\Interfaces\UserServiceInterface;
use App\Models\User;

/**
 * Tenemos que implementar la interfaz que hemos creado y le pasamos todas las funciones que
 * hemos creado ahi, ademas tenemos que crear un constructor e inicializarlo, vamos crear una 
 * clase normal y corriente usando una interfaz
 */
class UserServiceImpl implements UserServiceInterface{
    private $model;

    function __construct(){
        $this->model = new User();
    }

    /**
     * Funcion que se encarga de retornar los usuarios de la BD
     * en el archivo bootstrap\app.php tenemos que descomentar la linea
     * $app->withEloquent() (alrededor de la línea 27) para poder usar el metodo get, el cual
     * hace la consulta directamente
     */
    function getUser(){
        return $this->model->get();
    }

    function getUserById(int $id){

    }

    /**
     * Crea un nuevo usuario en el sistema, necesitamos descomentar la linea
     * $app->withEloquent() en el archivo app
     * QUEDA POR HACER EL ENCRYPTED DE LA PASSWORD POR TEMAS DE SEGURIDAD
     */
    function postUser(array $user){
        $this->model->create($user);
    }

    function putUser(array $user, int $id){

    }

    function delUser(int $id){

    }

    function restoreUser(int $id){

    }
}