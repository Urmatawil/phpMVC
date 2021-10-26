<?php

include_once("models/employees.php");
include_once("conex.php");

BD::createInstance();

class EmployeesController
{
    public function init()
    {
        $employees = Employee::query();
        include_once("views/employees/init.php");
    }
    public function create()
    {
        if ($_POST) {
            print_r($_POST);
            $name = $_POST['name'];
            $email = $_POST['email'];
            Employee::create($name, $email);
        }
        include_once("views/employees/create.php");
    }
    public function update()
    {
        include_once("views/employees/update.php");
    }
}
