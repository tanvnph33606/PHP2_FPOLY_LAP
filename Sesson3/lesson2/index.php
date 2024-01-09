<?php
class Teacher
{
    public $id;
    public $fullname;
    public $year;
    public $yearBegin;
    public $wage;
    public $timeTeaching;


    function __construct($id, $fullname, $year, $yearBegin, $wage, $timeTeaching)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->year = $year;
        $this->yearBegin = $yearBegin;
        $this->wage = $wage;
        $this->timeTeaching = $timeTeaching;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    function setYear($year)
    {
        $this->year = $year;
    }

    function setYearBegin($yearBegin)
    {
        $this->yearBegin = $yearBegin;
    }

    function setWage($wage)
    {
        $this->wage = $wage;
    }

    function setTimeTeaching($timeTeaching)
    {
        $this->timeTeaching = $timeTeaching;
    }

    function getInfo()
    {

        $age = date('Y') - $this->year;
        $yearBeginned = date('Y') - $this->yearBegin;

        return $this->id . " " . $this->fullname . " " . $age . " " . $yearBeginned . " " . $this->wage . " " . $this->timeTeaching;
    }
}

$teacher1 = new Teacher(1, "vu ngoc tan", 1999, 2016, 20000, 10);

echo $teacher1->getInfo();
