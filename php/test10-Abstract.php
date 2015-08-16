<?php
	abstract class Animal{
		public $name;
		abstract public function cry();
	}
	
	class Dog extends Animal{
		public function cry(){
			echo 'dog cry';
		}
	}
	
	$dog = new Dog();
	$dog->cry();
?>