<?php

namespace App\Services\Implemetations;

use App\Services\Interfaces\PassServiceInterface;
use App\Models\Pass;

class PassServiceImpl implements PassServiceInterface{
    private $model;

    function __construct(){
        $this->model = new Pass();
    }

    function getPass(){
        return $this->model->get();
    }
}