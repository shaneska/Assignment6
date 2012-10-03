<?php

/**
 * Class Name: AbstractPageBuilder
 * Desctription: Calls function getPage(), which loads the current page.
**/
abstract class AbstractPageBuilder {
    abstract function getPage();
	
}//end AbstractPageBuilder


/**
 * Class Name: AbstractPageDirector
 * Description: Calls all the functions to create or direct the page construction
**/
abstract class AbstractPageDirector {


	/**
	 * Function Name: __construct
	 *
	 * Function description: Constructor method
	 *
	 * @access abstract
	 * @param $builder_in
	 * @return void
	**/
	abstract function __construct(AbstractPageBuilder $builder_in);


	/**
	 * Function Name: buildPage()
	 *
	 * Function description: uses the buildPage() function to build the page
	 *
	 * @access abstract
	 * @param 
	 * @return void
	**/
	abstract function buildPage();


	/**
	 * Function Name: getPage()
	 *
	 * Function description: will find out which page is being worked on
	 * @access public
	 * @param $this
	 * @return page being worked on
	**/
	abstract function getPage();

	public function getPage() {
	  return $this->builder->getPage();
	  
	}//end getPage()
		
}//end AbstractPageDirector()