<?php

include_once("controllers/page_controller.php");
include_once("controllers/employees_controller.php");

$objController = ucfirst($controller) . "Controller";

$controller = new $objController();

$controller->$action();
