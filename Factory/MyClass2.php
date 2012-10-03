<?php
/**
 * MyClass2
 *
 * Provide a description of this class here.
 */
class MyClass2 {

	public function __construct() {
		print __METHOD__ . '::' . __LINE__ . '<br />'; 
	}//end __construct()
	
	public function __destruct() {
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}//end __destruct()

}//end MyClass2