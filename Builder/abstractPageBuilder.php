<?php
/**
 * Class Name: AbstractPageBuilder
 * Description: Calls function getPage(), which loads the current page.
**/
abstract class AbstractPageBuilder {
    abstract function getPage();
	
}//end AbstractPageBuilder