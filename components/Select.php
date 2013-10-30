<?php

/**
 * This class implements the select
 *
 * @author Matheus Lisboa de Barros
 */
class Select extends Field {

	/**
	* Constructor of class
	* @access public
	* @param String $name name of select
	* @param boolean $selected value selected
	* @param Array $options options of select
	* @return void
	*/
    public function Select($name = null, $selected = null, $options = array()) {
   		parent::Html("select");
		
		$this->setName($name);
		$this->addClass("fw-select");
		$this->addOptions($options, $selected);
	}

	/**
	* Append options
	* @access public
	* @param Array $options options of select
	* @param mixed $selected value selected
	* @return this
	*/
	public function addOptions($options = array(), $selected = null) {
		foreach($options as $key => $option) {
			if( is_object($option) ) {
				if( $selected == $option->getValue() ) {
					$option->setSelected(true);
				}
				$this->addOption($option);
			} else {
				$this->addOption(new Option($key, $option, ($selected == $key)));
			}
		}
		return $this;
	}

	/**
	* Append option
	* @access public
	* @param Option $option option of select
	* @return this
	*/
	public function addOption(Option $option) {
		return $this->add($option);
	}

}
