<?php

class Booking extends Controller{

    private $model;

    public function __construct($model) {
        parent::__construct($model);
        $this->model = $model;
        $this->model->template = 'views/Menu.php';
    }
}