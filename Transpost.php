<?php
abstract class Transport{
	public $price;
	public $color;
	public $people_amount;
	public $speed;
	public $name;
	function __construct($price = 0, $color = "black", $people_amount = 0, $speed = 0){
		$this->price = $price;
		$this->color = $color;
	}
	public function showme(){
		echo "<hr>";
		echo "My name is: {$this->name}. I cost: {$this->price}. My speed is: {$this->speed}";
		echo "</hr>";
	}
}
?>
