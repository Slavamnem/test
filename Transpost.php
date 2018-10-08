<?php
abstract class Transport{
	public $price;
	public $color;
	public $people_amount;
	public $speed;
	function __construct($price = 0, $color = "black", $people_amount = 0, $speed = 0){
		$this->price = $price;
		$this->color = $color;
	}
}
?>
