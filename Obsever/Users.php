<?php
/**
 * Class Name: Users
 * Description: checks if any information about the user has been changed and notifies and updates said user
**/
class Users implements SplSubject
{
    private $_users, $_observers, $_currentUser;

		
	/**
	 * Function Name: __construct()
	 *
	 * Description: constructor
	 * 
	 * @access public 
	 * @param $users
 	 * @returns void
	**/
    public function __construct(array $users) {
        $this->_users = $users;
        $this->_observers = array();
		
    }//end __construct()

	
    /** 
	 * Function Name: updateUsers()
	 *
	 * Description: updates users 
	 * 
	 * @access public 
	 * @param $users
 	 * @returns void
    **/
    public function updateUsers() {
        foreach ($this->_users as $users) {
            $this->_currentUser = $users;
            $this->notify();
			
        }//end foreach
        $this->_currentUser = null;
		
    }//end updateUsers()

	
    /**
	 * Function Name: getCurrent()
	 *
	 * Description: shows example of iteration
	 * 
	 * @access public 
	 * @param $users
 	 * @returns current user
    **/
    public function getCurrent() {
        return $this->_currentUser;
    }//end getCurrent()

    /**
	 * Function Name: Attach()
	 *
	 * Description: attaches an observer
	 * 
	 * @access public 
	 * @param $observer
 	 * @returns void  
    **/
    public function attach(SplObserver $observer) {
        array_push($this->_observers, $observer);
    }//end attach()

	
    /**
	 * Function Name: detach()
	 *
	 * Description: detatches the observer
	 * 
	 * @access public 
	 * @param $observer
 	 * @returns void
    **/
    public function detach(SplObserver $observer) {
        foreach ($this->_observers as $key => $item) {
            if ($observer == $item) {
                unset($this->_observers[$key]);
				
            }//end if
			
        }//end foreach
		
    }//end detach()

	
    /** 
	 * Function Name: notify()
	 *
	 * Description: sends notifications to all observers
	 * 
	 * @access public 
	 * @param $item
 	 * @returns void
    **/
    public function notify() {
        foreach ($this->_observers as $key => $item) {
            $item->update($this);
			
        }//end foreach
		
    }//end notify()
	
}//end Users