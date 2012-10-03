<?php
/**
 * Observer Pattern
 *
 * The Observer pattern is a behavioral pattern, that defines a one to many relationship
 * between objects and when the one is changed the others are notified and updated
**/

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'UserUpdateLogger.php';
require_once 'User.php';
$userArray = array(
    'user1',
    'user2',
    'user3',
    'user4',
);//end userArray

$logger = new UserUpdateLogger();
$users = new Users($userArray); 

$users->attach($logger);

$users->updateUsers();