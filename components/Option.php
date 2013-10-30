<?php

/**
 * This class implements the option of select
 *
 * @author Matheus Lisboa de Barros
 */
class Option extends Html {

	/**
	* Constructor of class
	* @access public
	* @param String $value value of option
	* @param String $label label of option
	* @param String $selected option is selected
	* @return void
	*/
    public function Option($value, $label, $selected = false) {
        parent::Html("option");
		
		$this->setValue($value);
		$this->setLabel($label);
		$this->setSelected($selected);
    }

	/**
	* Select or unselect the option
	* @access public
	* @param boolean $selected element is selected
	* @return this
	*/
	public function setSelected($selected = true) {
		if( $selected ) {
			return $this->setAttribute("selected", "selected");
		} else {
			return $this->removeAttribute("selected");
		}
	}

	/**
	* Get the label
	* @access public
	* @return String
	*/
	public function getLabel() {
		return $this->getInnerHtml();
	}

	/**
	* Set the label
	* @access public
	* @param String $label label
	* @return this
	*/
	public function setLabel($label) {
		return $this->set($label);
	}

	/**
	* Get the value
	* @access public
	* @return String
	*/
	public function getValue() {
		return $this->getAttribute("value");
	}

	/**
	* Set the value
	* @access public
	* @param String $value option value
	* @return this
	*/
	public function setValue($value) {
		return $this->setAttribute("value", $value);
	}

}
