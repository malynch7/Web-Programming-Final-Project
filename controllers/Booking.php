<?php

class Booking extends Controller{

    private $model;

    public function __construct($model) {
        $this->model = $model;

    }
}