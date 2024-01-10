<?php 
class Content
{
    // Properties
    private $title;
    private $text;
    private $type;
    private $isBreaking;

    // Constructor 
    public function __construct(string $type, string $title, string $text, bool $isBreaking)
    {
        $this->type = $type;
        $this->title = $title;
        $this->text = $text;
        $this->isBreaking = "false";
    }

    // Methods
    public function getType () {
        return $this->type;
    }
    public function getTitle () {
        return $this->title;
    }
    public function getText () {
        return $this->text;
    }
    public function setBreaking () {
        $this->isBreaking = "true";
        return $this->isBreaking;
    }
}