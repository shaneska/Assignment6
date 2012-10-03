<?php
/**
 * Class Name: UserUpdates
 * Description: Used to log the note that the user has been updated
**/
class UserUpdates implements SplObserver {
    /** 
	 * Function Name: update()
	 *
	 * Description: when user is updated it stores or logs info
	 * 
	 * @access public 
	 * @param $subject
	 * @returns void
    **/
    public function update(SplSubject $subject) {
        echo 'Updated: ' . $subject->getCurrent() . "\n";
		
    }//end update()
	
}//end UserUpdates