<?php

class Register extends Controller
{

    public $model;

    public function __construct($model)
    {
        $this->model = $model;
        $this->model->template = 'views/registration.php';
    }
}