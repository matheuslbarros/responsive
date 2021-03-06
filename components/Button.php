<?php

/**
 * This class implements the button element
 *
 * @author Matheus Lisboa de Barros
 */
class Button extends Html {

	/**
	* Constructor of class
	* @access public
	* @param String $label label of button
	* @param String $action action to execute
	* @return void
	*/
	public function Button($label, $attributes = array("href" => "#")) {
		parent::Html("a");
		
		foreach((Array) $attributes as $name => $value) {
			$this->setAttribute($name, $value);
		}
		
		$this->addClass("fw-button");
		$this->addClass("nice radius button");
		
		$this->set($label);
	}

}
