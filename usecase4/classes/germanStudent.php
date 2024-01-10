<?php
class germanStudent extends Student
{
    // Properties
    protected $group; 

    //Constructor
    public function __construct(string $name, float $grade)
    {
        parent::__construct($name, $grade);
        $this->group = "German";
    }

    //Method 
    public function getGroup() {
        return $this->group;
    }
    public function evaluateStudent() {
        return "Dear $this->name from $this->group class, you got a $this->grade for your $this->group course.";
    }
}
