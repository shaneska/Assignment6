<?php
/**
 * Iterative Design Pattern
 *
 * An Iterative pattern is a behavioural pattern that provides a way to 
 * access all of an objects peices at once without exposing its representation
**/

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'myClass.php';

$class = new MyClass();

foreach($class as $key =>$value) {
	print "$key =>$value\n";

}//end foreach

echo "\n";

$class ->iteratorVisible();

$values=array(1,2,3);
$it = new MyIterator($values);

foreach($it as $a=>$b){
	print "$a: $b\n";
}//end foreach