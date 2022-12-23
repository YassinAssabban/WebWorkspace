<?php
	abstract class Person {
		public $name;
		public function __construct($name) {
			$this -> name = $name;
		}
		abstract public function greet() : string;
	}
	class Programmer extends Person {
		public function greet() : string {
			return "Hello World from " . $this -> name;
		}
	}
	class Student extends Person {
		public function greet() : string {
			return "Howdy! I'm " . $this -> name;
		}
	}
	class Teacher extends Person {
		public function greet() :string {
			return "Good morning dear students";
		}
	}
	$programmer = new Programmer('John');
	echo $programmer -> greet();
	echo "<br>";

	$student = new Student('Doe');
	echo $student -> greet();
	echo "<br>";

	$teacher = new Teacher('Mary');
	echo $teacher -> greet();
	echo "<br>";
?>