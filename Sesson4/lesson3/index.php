<?php
require_once 'classes/Person.php';
require_once 'classes/Employee.php';
require_once 'classes/Manager.php';



$employee = new Employee("Hung", 30, "PH112", "Software Developer");
$employee->work();

echo "<br>";

$manager = new Manager("Tan", 35, "PH114", "Project Manager", "IT");
$manager->work();
echo "<br>";

$manager->manageTeam();
