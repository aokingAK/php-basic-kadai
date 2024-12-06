<?php

class Food{
  private $name;
  private $price;

  public function __construct(string $name , int $price){
    $this -> name = $name;
    $this -> price = $price; 
  }
    public function set_price(string $price) {
    $this->name = $price;
  }
    public function show_price() {
    echo $this->price . '<br>';
  }
}

class Animal{
  private $name;
  private $height;
  private $wieght;

  public function __construct(string $name , int $height , int $wieght){
    $this -> name = $name;
    $this -> height = $height;
    $this -> wieght = $wieght;
  }
  public function set_wieght(string $wieght) {
    $this->name = $wieght;
  }
    public function show_wieght() {
    echo $this->wieght . '<br>';
  }
}

$food = new Food('poteto' , 250);
$animal = new Animal('dog', 60 , 5000);

print_r($food);
echo '<br>';
print_r($animal);
echo '<br>';

$food -> show_price();
$animal -> show_wieght();

?>