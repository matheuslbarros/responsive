<?php

/**
 * This class implements the form field
 *
 * @author Matheus
 */
abstract class Field extends Html {

	/**
	* Get the name of input
	* @access public
	* @return String name of input
	*/
	public function getName() {
		return $this->getAttribute("name");
	}

	/**
	* Set the name of input
	* @access public
	* @param String $name name of input
	* @return this
	*/
	public function setName($name) {
		if( $name ) {
			$this->setAttribute("name", $name);
		}
		return $this;
	}

	/**
	* Get the value of input
	* @access public
	* @return String value of input
	*/
	public function getValue() {
		return $this->getAttribute("value");
	}

	/**
	* Set the value of input
	* @access public
	* @param String $value value of input
	* @return this
	*/
	public function setValue($value) {
		return $this->setAttribute("value", $value);
	}

}
