<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * Haciendo que el controlador base de un JSON logramos ahorra codigo 
     * en los demas controladores, ya que se pasan a JSON automaticamente
     */
    public function response($data, $status = 200){
        return response()->json($data, $status);
    }
}
