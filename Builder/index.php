<?php
/**
 * Builder Pattern
 * 
 * Builder Patterns are used to separeate the construction of objects from 
 * the main class, and to implement them and bring it all together in another class 
**/

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'myClasses.php';
require_once 'abstractClassBuilder.php';
require_once 'abstractPageBuilder.php';

 echo 'Testing Building Pattern';
  writeln('');

  $pageBuilder = new abstractPageBuilder();
  $pageDirector = new abstractPageDirector($pageBuilder);
  $pageDirector->buildPage();
  $page = $pageDirector->GetPage();
  writeln($page->showPage());
  writeln('');
 
  writeln('Test Complete');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }//end function writeln()