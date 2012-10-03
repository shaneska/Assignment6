<?php

/**
 * Class Name: AbstractPageDirector
 * Description: Calls all the functions to create or direct the page construction
**/
abstract class AbstractPageDirector {


	/**
	 * Function Name: __construct
	 *
	 * Description: Constructor method
	 *
	 * @access abstract
	 * @param $builder_in
	 * @return void
	**/
	abstract function __construct(AbstractPageBuilder $builder_in);


	/**
	 * Function Name: buildPage()
	 *
	 * Description: uses the buildPage() function to build the page
	 *
	 * @access abstract
 	 * @param 
	 * @return void
	**/
	abstract function buildPage();
		
		
	/**
	 * Function Name: getPage()
	 *
	 * Description: will find out which page is being worked on
	 * @access abstract
	 * @param 
	 * @return page being worked on
	**/
	abstract function getPage();

}//end AbstractPageDirector