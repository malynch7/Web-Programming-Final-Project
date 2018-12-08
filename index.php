<?php

require_once 'controllers/Controller.php';
require_once 'models/Model.php';
require_once 'views/View.php';

$model = new Model();
$controller = new Controller($model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

// select controller
if(!isset($_COOKIE['email'])) {
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
        }
    }
}else if(!isset($_COOKIE['bookingStage'])){
    if(isset($_GET['controller']) && !empty($_GET['controller']) && $_GET['controller'] == 'profile'){
        $model->template = 'views/profile.php';
    }else{
        require_once 'controllers/Menu.php';
        $controller = new Menu($model);
    }
}else{
    switch($_COOKIE['bookingStage']){
        case 0:
            $model->template = 'views/inventory.php';
            break;
        case 1:
            $model->template = 'views/rooms.php';
            break;
        case 2:
            $model->template = 'views/parking.php';
            break;
        case 3:
            $model->template = 'views/lotSelection.php';
            break;
        case 4:
            $model->template = 'views/viewCart.php';
            break;
        case 5:
            $model->template = 'views/congrats.php';
            break;
    }
    require_once 'controllers/Booking.php';
    $controller = new Booking($model);
}

$view = new View($controller, $model);

echo $view->output() ;
