<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Implemetations\PassServiceImpl;
use App\Models\Pass;

class PassController extends Controller
{
    /**
     * @var PassServiceImpl
     */
    private $passService;
    /**
     * El request es el dato que tiene TODA la informacion de nuestra peticion, asi que no puede faltar
     * @var Request
     */
    private $request;

    /**
     * Le pasamos la implementacion para poder usar nuestras funciones y un request
     * para recoger los datos de la BD
     */
    public function __construct(PassServiceImpl $passService, Request $request){
        $this->passService = $passService;
        $this->request = $request;
    }

    function getListPass(){
        return response($this->passService->getPass());
    }
}
