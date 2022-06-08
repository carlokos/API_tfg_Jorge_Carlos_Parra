<?php

namespace App\Services\Interfaces;

interface BookingServiceInterface{
    /**
     * @return array Booking
     */
    function getBooking();

    /**
     * @param array $booking
     * @return void
     */
    function postBooking(array $booking);

    /**
     * @param int $id
     * @return void
     */
    function delBooking(int $id);
}