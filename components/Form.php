<?php

/**
 * This class implements the form element
 *
 * @author Matheus Lisboa de Barros
 */
class Form extends Html {

	/**
	* Constructor of class
	* @access public
	* @param String $action form action
	* @param String $method form method
	* @return void
	*/
	public function Form($action = "index.php", $method = "POST") {
		parent::Html("form");
		
		$this->setAttribute("name", "form");
		
		$this->setAttribute("action", $action);
		$this->setAttribute("method", $method);
		
		$this->addClass("fw-form");
	}

}
