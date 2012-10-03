<?php

abstract class Factory {

	public static function create($class = null) {
		if(!$class) {
			print __METHOD__ . '::' . __LINE__ . '<br />';
			//handle null value here
			$class = get_called_class();
			if($class == 'Factory') {
				throw new Exception('Cannot create an instance of Factory class');
			}//end inner if
			else {
			print __METHOD__ . '::' . __LINE__ . '<br />';
		}//end else
		
		}//end if
		
		
		if(!class_exists($class)) {
			throw new Exception(sprintf('%1$s does not exist', $class));
		}//end if
		
		return new $class;
	}//end create method


	/**
	 * Do NOT allow the instantiation of this class. (first example)
	**/
	//final private function __construct() { }//end __construct
	//final private function __destruct() { }//end __destruct

}