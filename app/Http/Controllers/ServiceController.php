<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Implemetations\ServiceServiceImpl;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * @var ServiceServiceImpl
     */
    private $ServiceService;
    /**
     * El request es el dato que tiene TODA la informacion de nuestra peticion, asi que no puede faltar
     * @var Request
     */
    private $request;

    /**
     * Le pasamos la implementacion para poder usar nuestras funciones y un request
     * para recoger los datos de la BD
     */
    public function __construct(ServiceServiceImpl $ServiceService, Request $request){
        $this->ServiceService = $ServiceService;
        $this->request = $request;
    }

    function getListService(){
        return response($this->ServiceService->getService());
    }
}
