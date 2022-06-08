<?php

namespace App\Services\Implemetations;

use App\Services\Interfaces\ServiceServiceInterface;
use App\Models\Service;

class ServiceServiceImpl implements ServiceServiceInterface{
    private $model;

    function __construct(){
        $this->model = new Service();
    }

    function getService(){
        return $this->model->get();
    }
}