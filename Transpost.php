<?php
abstract class Transport{
	public $name;
	public $price;
	public $color;
	public $people_amount;
	public $speed;
	function __construct($name = "anonim", $price = 0, $color = "black", $people_amount = 0, $speed = 0){
		$this->name = $name;
		$this->price = $price;
		$this->color = $color;
		$this->people_amount = $people_amount;
		$this->speed = $speed;
	}
	public function showme(){
		echo "<hr>";
		echo "My name is: {$this->name}. I cost: {$this->price}. My speed is: {$this->speed}";
		echo "</hr>";
	}
}
?>