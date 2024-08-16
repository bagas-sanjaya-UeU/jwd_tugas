<?php
require_once 'config/Database.php';
require_once 'controllers/TicketController.php';
require_once 'controllers/AuthController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'ticket';

switch ($controller) {
    case 'auth':
        $controller = new AuthController();
        break;
    case 'ticket':
    default:
        $controller = new TicketController();
        break;
}


$controller->handleRequest();
