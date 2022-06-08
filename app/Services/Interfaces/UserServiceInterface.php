<?php

namespace App\Services\Interfaces;

/*
    Aqui se crea todos los metodos que usemos en la implementacion
    en este ejemplo tendremos funciones para añadir, borrar y actualizar usuarios,
    tambien es importante documentarlo y esta los ejemplos de como se suele hacer
    (@param indica parametro, @return lo que devuelve dicha función)
*/

interface UserServiceInterface{
    /**
     * @return array User
     */
    function getUser();
    /**
     * @param int $id
     * @return User
     */
    function getUserById(int $id);
    /**
     * @param array $user
     * @return void
     */
    function postUser(array $user);
    /**
     * @param array $user
     * @param int $id
     * @return boolean
     */
    function putUser(array $user, int $id);
    /**
     * @param int $id
     * @return boolean
     */
    function delUser(int $id);
    /**
     * @param int $id
     * @return boolean
     */
    function restoreUser(int $id);
}