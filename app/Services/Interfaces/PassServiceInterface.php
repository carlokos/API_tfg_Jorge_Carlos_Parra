<?php

namespace App\Services\Interfaces;

/*
    Aqui se crea todos los metodos que usemos en la implementacion
    en este ejemplo tendremos funciones para añadir, borrar y actualizar usuarios,
    tambien es importante documentarlo y esta los ejemplos de como se suele hacer
    (@param indica parametro, @return lo que devuelve dicha función)
*/

interface PassServiceInterface{
    /**
     * @return array Pass
     */
    function getPass();
}