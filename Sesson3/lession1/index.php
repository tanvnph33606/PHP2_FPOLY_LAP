<?php
class Student
{
    public $id;
    public $name;
    public $age;
    public $roll;
    // public function __construct($name, $age, $roll){
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->roll = $roll;
    // }

    function __construct($id, $name, $age, $roll)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->roll = $roll;
    }


    // function setInfo($id, $name, $age, $roll)
    // {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->roll = $roll;
    // }

    function getInfo()
    {
        $info = $this->id . " " . $this->name . " " . $this->age . " " . $this->roll . "<br>";
        return $info;
    }

    function calulateAge()
    {
        $age = date('Y') - $this->age;
        return $age;
    }
}


$student1 = new Student(1, "Tan", 2004, 23);
// $student1->setInfo(1, "Tan", 23, 23);
echo "Info: " . $student1->getInfo();
echo "Age: " . $student1->calulateAge();
