<?php
abstract class Car extends Transport{
	function __construct($name = "anonim", $price = 0, $color = "black", $people_amount = 0, $speed = 0){
		parent::__construct($name = "anonim", $price = 0, $color = "black", $people_amount = 0, $speed = 0);
	}
	public function showme(){
		echo "<hr>";
		echo "It is Car. My name is: {$this->name}. I cost: {$this->price}. My speed is: {$this->speed}";
		echo "</hr>";
	}
}
?>