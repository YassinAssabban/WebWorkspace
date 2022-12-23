<?php
	class Person {
		
		// Properties
		public $name;
		public $age;
		protected $protectedProperty = 'Protected';
		private $privateProperty = 'Private';
		
		public function __construct($name, $age) {
			$this -> name = $name;
			$this -> age = $age;
		}
		public function introduce() {
			echo "My name is {$this -> name}. My age is {$this -> age}";
		}
		
		protected function protectedMethod() {
			echo $this -> protectedProperty;
		}
		
		private function privateMethod() {
			// cannot call this function 
			// from Child
		}
	}
	
	class Tom extends Person {
		
		public $school;
		
		// own method
		public function doSomething() {
			$this -> protectedMethod();
			// invalid
			// $this -> privateMethod();
		}

		// overriden methods
		public function __construct($name, $age, $school) {
			# Sans utiliser le constructeur parent
			$this -> name = $name;
			$this -> age = $age;
			$this -> school = $school;
			
			# $this -> name and $this -> age seront appelés par le constructeur parent
			parent::__construct($name, $age);
			$this -> school = $school;
			
		}
		
		public function introduce() {
			echo "My name is {$this -> name}. My age is {$this -> age}. My school is {$this -> school}";
		}
	}
	
	$tom = new Tom('Tom', 29, 'Foothill School');
	$tom -> introduce();
	$tom -> doSomething();

	// all of following are invalid (only public visibility is accessible from outside)
	// echo $tom -> protectedProperty;
	// echo $tom -> privateProperty;
	// $tom -> protectedMethod();
	// $tom -> privateMethod();
	
	// Prevent class inheritance
	final class NonParent {
		// class code
	}
	// will throw an error (décommenter pour voir erreur)
	//class Child extends NonParent {}
	
	// Prevent method overriding
	class ParentClass {
		final public function myMethod() {

		}
	}
	class Child extends ParentClass {
		// Fatal Error: Overriding final methods (décommenter pour voir erreur)
		//public function myMethod() {}
	}
?>
