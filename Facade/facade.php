<?php
/**
 * Class Name: f_String
 * Description: Shows use of facade pattern
**/
class f_String {

	/**
  	 * Function Name: __construct
	 *
	 * Function description: Constructor
	 *
	 * @access abstract
	 * @param $builder_in
	 * @return void
	**/
	public function __construct($str) {
		$this-> str =$str;
		$this -> _AddText($str);
		$this -> _AddDigits();
		$this -> _AddObject(new Examples);
		echo $this->str;
		
	}//end __construct
	
	/**
	 * Function Name: __AddText()
	 *
	 * Function description: takes a variable from the constructor
	 *
	 * @access private
	 * @param a string var from constructor
	 * @return void
	**/	
	private function _AddText()	{
		$this->str .= '| Text';
		
	}//end _AddText()
	
	
	/**
	 * Function Name: __AddDigits()
	 *
	 * Function description: adds a string to the accepted variable from constructor
	 *
	 * @access private
	 * @param a string var
	 * @return void
	**/
	private function _AddDigits() {
		$this->str .= '| Digits';
		
	}//end _AddDigits()
	
	/**
	 * Function Name: __AddObject()
	 *
	 * Function description: takes in a new object, and call the exampleStuff() method.
	 *
	 * @access public
	 * @param a object of type Examples
	 * @return void
	**/
	public function _AddObject(Examples $obj) {
		$this->str .=  $obj->exampleStuff();
		
	}//end _AddObject()

}//end f_String


/**
 * Class Name: Examples
 * Description: Used in example of Facade
**/
class Examples {
	
	/**
	* Function Name: exampleString()
	*
	* Function description: returns a a string and the class name
	*
	* @access private
	* @param
	* @return a String and the name of the class
	**/
	public function exampleString()	{
		return __CLASS__ . ' | Example string';
		
	}//end exampleString()
	
}//end Examples