<?php

require_once 'controllers/Controller.php';
require_once 'models/Model.php';
require_once 'views/View.php';

$model = new Model();

if (isset($_GET['controller']) && !empty($_GET['controller'])) {
    switch($_GET['controller']){
        case 'login':
            require_once 'controllers/Login.php';
            $controller = new Login($model);
            break;
        case 'register':
            require_once 'controllers/Register.php';
            $controller = new Register($model);
            break;
        case 'booking':
            require_once 'controllers/Booking.php';
            $controller = new Booking($model);
            break;
    }
}else{

}

$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

echo $view->output() ;
