<?php

class Login extends Controller{

    private $model;

    public function __construct($model) {
        parent::__construct($model);
        $this->model = $model;
        $this->model->template = 'views/Login.php';
    }

    public function clicked(){
        $this->model->string = 'Updated Data, thanks to MVC and PHP!';
    }
}