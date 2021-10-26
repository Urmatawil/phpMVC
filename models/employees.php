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
}
