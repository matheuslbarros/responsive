<?php

/**
 * This class implements the input with type checkbox
 * 
 * @author Matheus Lisboa de Barros
 */
class InputCheckbox extends Field {

	/**
	* Constructor of class
	* @access public
	* @param String $name name of input
	* @param String $value value of input
	* @param boolean $checked input is checked
	* @return void
	*/
	public function InputCheckbox($name = null, $value = null, $checked = false) {
		parent::Html("input");
		
		$this->setAttribute("type", "checkbox");
		$this->addClass("fw-input-checkbox");
		
		$this->setName($name . "[]");
		$this->setValue($value);
		
		$this->setChecked($checked);
	}

	/**
	* Check or uncheck the input
	* @access public
	* @param boolean $checked element is checked
	* @return this
	*/
	public function setChecked($checked = true) {
		if( $checked ) {
			return $this->setAttribute("checked", "checked");
		} else {
			return $this->removeAttribute("checked");
		}
	}

}
