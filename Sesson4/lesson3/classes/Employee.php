<?php class Employee extends Person
{
    public $employeeId;
    public $position;

    public function __construct($name, $age, $employeeId, $position)
    {
        parent::__construct($name, $age);
        $this->employeeId = $employeeId;
        $this->position = $position;
    }

    public function work()
    {
        echo "{$this->name} is working.";
    }
}
