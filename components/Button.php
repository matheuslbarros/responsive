<?php

/**
 * This class implements the button element
 *
 * @author Matheus
 */
class Button extends Html {

	/**
	* Constructor of class
	* @access public
	* @param String $label label of button
	* @param String $action action to execute
	* @return void
	*/
	public function Button($label = null, $action = null) {
		parent::Html("a");
		
		$this->setAttribute("onclick", "form.submit()");
		
		$this->setAttribute("href", "#" . $action);
		$this->addClass("fw-button");
		$this->addClass("nice radius button");
		
		$this->set($label);
	}

}
