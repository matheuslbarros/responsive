<?php

/**
 * This class implements the input text
 *
 * @author Matheus
 */
class InputText extends Field {

	/**
	* Constructor of class
	* @access public
	* @param String $name name of input
	* @param String $value value of input
	* @return void
	*/
	public function InputText($name = null, $value = null) {
		parent::Html("input");
		
		$this->setAttribute("type", "text");
		$this->addClass("fw-input-text");
		
		$this->setName($name);
		$this->setValue($value);
	}

}
