<?php 
class Items
{
    // Properties
    private $category;
    private $name;
    private $price;
    private $quantity;

    // Constructor 
    public function __construct(string $category, string $name, float $price, int $quantity)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    // Methods
    public function getCategory () {
        return $this->category;
    }
    public function getName () {
        return $this->name;
    }
    public function getPrice () {
        return $this->price;
    }
    public function getQuantity () {
        return $this->quantity;
    }
}