<?php

//valores por defecto
$controller = "page";
$action = "init";

if (isset($_GET['action']) && isset($_GET['controller'])) {

    //comprobamos que no esten vacios, si estan vacios toma los valores por defecto
    if ((!empty($_GET["controller"])) && (!empty($_GET["action"]))) {

        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }
}

require_once("views/template.php");
