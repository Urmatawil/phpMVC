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
            $name = $_POST['name'];
            $email = $_POST['email'];
            Employee::create($name, $email);
            header("location:./?controller=employees&action=init");
        }
        include_once("views/employees/create.php");
    }

    public function update()
    {

        if ($_POST) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            Employee::edit($id, $name, $email);
        }

        $id = $_GET['id'];
        $employee = (Employee::update($id));

        include_once("views/employees/update.php");
    }

    public function delete()
    {
        $id = $_GET['id'];
        Employee::delete($id);
        header("location:./?controller=employees&action=init");
    }
}
