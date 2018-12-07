<?php

class Menu extends Controller{

    private $model;

    public function __construct($model) {
        parent::__construct($model);
        $this->model = $model;
        $this->model->template = 'views/menu.php';
    }
}