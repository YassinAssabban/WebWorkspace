<?php
class House {

	// Properties
	public $name;
	public $primaryColor = 'black';
	public $secondaryColors = [
		'bathroom' => 'white',
		'bedroom' => 'light pink',
		'kitchen' => 'light blue'
	];
	public $hasPool = false;
	public $extra;
	
	// Constructeur
	public function __construct($name, $color) {
			$this -> name = $name;
			$primaryColor = $color;
		}
	
	// Destructeur
	public function __destruct() {
			echo "{$this -> name} has been destructed";
		}
		
	// Methods
	public function echoData() {
		echo "The color of {$this -> name} is {$this -> primaryColor}";
	}
	
	public function changeColor($color) {
		$this -> primaryColor = $color;
	}	
}
?>