<?php

class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function logout(){
        unset($_COOKIE['email']);
        setcookie("email", "", time() - 3600);
    }

    public function startBooking(){
        setcookie("bookingStage",0,time()+(2*60*60));
    }

    public function clearBooking(){
        unset($_COOKIE['bookingStage']);
        unset($_COOKIE['Destination_Selection']);
        unset($_COOKIE['Room_Selection']);
        unset($_COOKIE['Parking_Lot']);
        unset($_COOKIE['Parking_Bool']);

    }
}