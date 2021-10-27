<?php

class Employee
{
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public static function query()
    {
        $listEmployees = [];
        $connectionBD = BD::createInstance();
        $sql = $connectionBD->query("SELECT * FROM empleados");

        foreach ($sql->fetchAll() as $employee) {
            $listEmployees[] = new Employee($employee['id'], $employee['name'], $employee['email']);
        }

        return $listEmployees;
    }

    public static function create($name, $email)
    {
        $connectionBD = BD::createInstance();

        $sql = $connectionBD->prepare("INSERT INTO `empleados` ( `name`, `email`) VALUES (?,?)");
        $sql->execute(array($name, $email));
    }

    public static function delete($id)
    {
        $connectionBD = BD::createInstance();

        $sql = $connectionBD->prepare("DELETE FROM `empleados` WHERE `empleados`.`id` = ?");
        $sql->execute(array($id));
    }

    public static function update($id)
    {
        $connectionBD = BD::createInstance();

        $sql = $connectionBD->prepare("SELECT * FROM `empleados` WHERE `empleados`.`id` = ?");
        $sql->execute(array($id));

        $employee = $sql->fetch();
        return new Employee($employee['id'], $employee['name'], $employee['email']);
    }

    public static function edit($name, $email, $id)
    {
        $connectionBD = BD::createInstance();

        $sql = $connectionBD->prepare("UPDATE `empleados` SET `name`=?, `email`=? WHERE `empleados`.`id`=?");
        $sql->execute(array($name, $email, $id));
    }
}
