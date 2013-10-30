<?php

/**
 * This class implements the input password
 *
 * @author Matheus Lisboa de Barros
 */
class InputPassword extends Field {

	/**
	* Constructor of class
	* @access public
	* @param String $name name of input
	* @param String $value value of input
	* @return void
	*/
	public function InputPassword($name = null, $value = null) {
		parent::Html("input");
		
		$this->setAttribute("type", "password");
		$this->addClass("fw-input-password");
		
		$this->setName($name);
		$this->setValue($value);
	}

}
