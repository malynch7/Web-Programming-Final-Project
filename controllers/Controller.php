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
        setcookie("bookingStage", "", time() - 3600, '/~mlynch7/finalProject' );
        unset($_COOKIE['Destination_Selection']);
        setcookie("Destination_Selection", "", time() - 3600, '/~mlynch7/finalProject');
        unset($_COOKIE['Room_Selection']);
        setcookie("Room_Selection", "", time() - 3600, '/~mlynch7/finalProject');
        unset($_COOKIE['Parking_Lot']);
        setcookie("Parking_Lot", "", time() - 3600, '/~mlynch7/finalProject');
        unset($_COOKIE['Parking_Bool']);
        setcookie("Parking_Bool", "", time() - 3600, '/~mlynch7/finalProject');

    }
}