<?php

require_once 'controllers/Controller.php';
require_once 'models/Model.php';
require_once 'views/View.php';

$model = new Model();

// select controller
if(session_id() == '' || !isset($_SESSION)) {
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
                require_once 'controllers/Menu.php';

                break;
        }
    }else{
        $controller = new Controller($model);
    }
}else if(!isset($_SESSION['bookingStage'])){
    require_once 'controllers/Menu.php';
    $controller = new Menu($model);
}else{
    $controller = new Booking($model);
    switch($_SESSION['bookingStage']){
        case 0:
            $model ->template = 'views/inventory.php';
            break;
        case 1:
            $model ->template = 'views/rooms.php';
            break;
        case 2:
            $model ->template = 'views/parking.php';
            break;
        case 3:
            $model ->template = 'views/lotSelection.php';
            break;
        case 4:
            $model ->template = 'views/viewCart.php';
            break;
    }

}

$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

echo $view->output() ;
