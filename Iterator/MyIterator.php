<?php

require_once 'myClass.php';

/** 
 * Class Name: MyIterator
 * Description: implements the Iterator interface to allow the objects to decide how they will be
 * iterated 
**/
class MyIterator implements Iterator {

	private $var = array();
	
	
	/**
	 * Function Name: __construct()
	 * 
	 * Description: shows example of iteration
	 * 
	 * @access public 
	 * @param $array
	 * @returns void
	**/
	public function __construct($array)	{
		if (is_array($array)) {
		 $this->var = $array;
		 
		}//end if
		
	}//end __construct()
	

	/**
	 *Function Name: rewind()
	 *
	 * Description: shows example of iteration
	 * 
	 * @access public 
	 * @param 
	 * @returns void
	**/
	public function rewind() {
		echo'Rewinding \n';
		reset($this ->var);
		
	}//end rewind()
	
	
	/** 
	 * Function Name: current()
	 *
	 * Description: shows example of iteration
	 * 
	 * @access public 
	 * @param $var
	 * @returns current position
	**/
	public function current() {
		$var = current($this ->var);
		echo "current: $var\n";
		return $var;
		
	}//end current()
	
	
	/** 
	 * Function Name: key()
	 *
	 * Description: shows example of iteration
	 * 
	 * @access public 
	 * @param $var
	 * @returns var represtenting key
	**/
	public function key() {
		$var=key($this->var);
		echo "Key : $var\n";
		return $var;
	}//end key()
	
	
	/** 
	 * Function Name: next()
	 *
	 * Description: shows example of iteration
	 * 
	 * @access public 
	 * @param $var
	 * @returns next variable
	**/
	public function next() {
		$var =next($this->var);
		echo "next: $var\n";
		return $var;
	}//end next()
	
	
	/** 
	 * Function Name:  valid()
	 *
	 * Description: shows example of iteration
	 * 
	 * @access public 
	 * @param 
	 * @returns variable of $var
	**/
	public function valid() {
		$key = key($this->var);
		$var = ($key !== NULL && $key !== FALSE);
		echo "valid: $var\n";
		return $var;	
	}//end valid()
	
}//end class Iterator