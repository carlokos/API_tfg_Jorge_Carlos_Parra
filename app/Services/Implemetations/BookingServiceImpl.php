<?php

namespace App\Services\Implemetations;

use App\Services\Interfaces\BookingServiceInterface;
use App\Models\Booking;

/**
 * Tenemos que implementar la interfaz que hemos creado y le pasamos todas las funciones que
 * hemos creado ahi, ademas tenemos que crear un constructor e inicializarlo para que sea mas facil
 * interactuar con el modelo 
 */
class BookingServiceImpl implements BookingServiceInterface{
    private $model;

    function __construct(){
        $this->model = new Booking();
    }

    function getBooking(){
        return $this->model->get();
    }

    function postBooking(array $booking){
        $this->model->create($booking);
    }

    function delBooking(int $id){
        $booking = $this->model->where('Id', $id);

        $booking->delete();
    }
}