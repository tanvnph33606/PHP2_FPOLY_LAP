<?php class Manager extends Employee
{
    public $department;

    public function __construct($name, $age, $employeeId, $position, $department)
    {
        parent::__construct($name, $age, $employeeId, $position);
        $this->department = $department;
    }

    public function manageTeam()
    {
        echo "{$this->name} is managing the {$this->department} department.";
    }
}
