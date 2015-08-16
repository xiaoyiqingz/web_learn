<?php
/*
	对象普通赋值是引用, 对于函数同理
*/

	class Person {
		public $person_age;
		public $name;	
	}

	$person_a = new Person();
	$person_a->name = "小明";
	$person_a->age = 20;
	
	$person_b = $person_a;  //*引用
	echo $person_a->name."||".$person_b->name."<br/>";
	
	$person_b->name = "小黑";
	echo $person_a->name."||".$person_b->name."<br/>";
	
	function testperson_a($a) {
		$a->name ="小白";
	}
	function testperson_b(&$a) {
		$a->name = "小灰";
	}
	testperson_a($person_a);
	echo $person_a->name."<br/>";
	testperson_b($person_a);
	echo $person_a->name."<br/>";
/*
	普通数据类型赋值是值传递，取址才是引用, 对于函数同理
*/	
	$var_a = 56;
	$var_b = $var_a;
	$var_b += 4;
	echo $var_a."||".$var_b."<br/>";
	$var_c = &$var_a;
	$var_c += 4;
	echo $var_a."||".$var_c."<br/>";
	
	function testvar_a($a) {
		$a++;
	}
	function testvar_b(&$a) {
		$a++;
	}
	testvar_a($var_a);
	echo $var_a."<br/>";
	testvar_b($var_a);
	echo $var_a."<br/>";
?>