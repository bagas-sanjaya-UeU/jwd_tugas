<?php
require_once 'config/Database.php';
require_once 'controllers/TicketController.php';

$controller = new TicketController();
$controller->handleRequest();
