<?php
/**
 * MyClass
 *
 * Provide a description of this class here.
 */
class MyClass extends Factory {

	/**
	 * factory //all methods
	 * 
	 * description of method here
	 *
	 * @acess public //protected/private
	 * @param void
	 * @return MyClass returns a new instance of MyClass.
	 **/
	public static function factory() { //final cannot be overwritten 
		print __METHOD__ . '::' . __LINE__ . '<br />'; //prints method and line number
		return new MyClass();
	}//end factory() 
	
	protected function __construct() {
		print __METHOD__ . '::' . __LINE__ . '<br />'; 
	}//end __construct()
	
	public function __destruct() {
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}//end __destruct()

}