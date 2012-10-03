<?php
/*
 * Class Name: MyClass
 * Description: Shows examples of using the iterator design pattern
**/
class MyClass {

	public $var1 = 'VALUE 1';
	public $var2 = 'VALUE 2';
	public $var3 = 'VALUE 3';
	
	protected $protectedVar ='Protected Variable';
	private $privateVar = 'Privated Variable';
	
	function iteratorVisible(){
	
	echo "MyClass:: IterateVisible:\n";
		foreach($this as $key => $value) {
		  print "$key => $value\n";
		  
		}//end foreach
		
	}//end iteratorVisable()

}//end myClass