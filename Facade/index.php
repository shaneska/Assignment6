<?php
/**
 * The Facade Design Pattern
 *
 * The Facade design pattern is "used for providing a unified interface to a set
 * of interfaces in a subsystem" -wikipedia
**/
ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'facade.php';

$x = new f_String('intro text');
