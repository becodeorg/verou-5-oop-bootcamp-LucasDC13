<?php
class Student
{
    // Properties
    protected $name;
    protected $grade;

    // Constructor 
    public function __construct(string $name, float $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }

    // Methods
    public function getName() {
        return $this->name;
    }
    public function getGrade() {
        return $this->grade;
    }
    public function changeGroup(string $newGroup) {
        $this->group = $newGroup;
    }
}