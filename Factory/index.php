<?php
/**
 * Factory Design Pattern
 *
 * The factory class lets the subclasses of an interface decide how and which class to instantiate
**/

//turn error reporting on and give it 
ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

/*
 * include the other files, ensures that the other files exist and are included
 * include once will keep running if they are not there. 
 */
require_once 'Factory.php';
require_once 'MyClass.php';
require_once 'MyClass2.php';

//create an instance of MyClass using the factory method
$my_class = MyClass::factory();

unset($my_class);

$my_class = Factory::create('MyClass2');

unset($my_class);

$my_class = MyClass::create();

MyClass::create();