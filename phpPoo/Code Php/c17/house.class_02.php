<?php
class House {

	// Properties
	private $name;
	private $primaryColor = 'black';
	private $secondaryColors = [
		'bathroom' => 'white',
		'bedroom' => 'light pink',
		'kitchen' => 'light blue'
	];
	private $hasPool = false;
	private $extra;
	
	// Ancien constructeur
	/*
	public function __construct($name, $color) {
			$this -> name = $name;
			$primaryColor = $color;
	}
	*/
	
	// Nouveau constructeur
	 public function __construct($data)
		{
			if(is_array($data)){
				$this->fillObject($data);
			}else{
				$this->setName($data);
			}
		}
	
	// Destructeur
	public function __destruct() {
			echo "{$this-> name} has been destructed";
		}
			
	// Getters and Setters
	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getPrimaryColor()
	{
		return $this->primaryColor;
	}

	public function setPrimaryColor($primaryColor)
	{
		$this->primaryColor = $primaryColor;
	}
	
	// Méthodes magiques
		public function __set($property, $value){
			$this->property = $value;
		}
		
		public function __get($property){
			if(isset($property)){
				return $this->property;
			}
		}

	// Methods
	public function echoData() {
		echo "The color of {$this -> name} is {$this -> primaryColor}";
	}
	
	public function changeColor($color) {
		$this -> primaryColor = $color;
	}	
	
	// Hydratation
	public function fillObject(array $data){
		foreach ($data as $key => $value){
			$method = 'set'.ucfirst($key);
			if(method_exists($this,$method)){
				$this->$method($value);
			}
		}
	}
}
?>