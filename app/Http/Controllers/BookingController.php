<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Implemetations\BookingServiceImpl;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * @var BookingServiceImpl
     */
    private $BookingService;
    /**
     * El request es el dato que tiene TODA la informacion de nuestra peticion, asi que no puede faltar
     * @var Request
     */
    private $request;

    /**
     * Le pasamos la implementacion para poder usar nuestras funciones y un request
     * para recoger los datos de la BD
     */
    public function __construct(BookingServiceImpl $BookingService, Request $request){
        $this->BookingService = $BookingService;
        $this->request = $request;
    }

    /**
     * Tenemos que asegurarnos que la respuesta de que ya existe si no dara un error,
     * por eso modificamos el response a 201
     */
    function createBooking(){
        $response = response("", 201);
        $this->BookingService->postBooking($this->request->all());
        return $response;
    }

    /**
     * En el controlador creamos un metodo que obtenga la lista de usuario de la BD,
     * se usa la variable response ya que esta tiene los datos de la consulta.
     * Usamos el metodo que hemos creado en la implementación
     */
    function getListBooking(){
        return response($this->BookingService->getBooking());
    }

    function deleteUser(int $id){
        $this->BookingService->delBooking($id);
        return response("", 204);
    }
}
