<?php

/**
 * This class implements the textarea
 *
 * @author Matheus
 */
class Textarea extends Field {

	/**
	* Constructor of class
	* @access public
	* @param String $name name of textarea
	* @param String $value content of textarea
	* @return void
	*/
	public function Textarea($name = null, $value = null) {
		parent::Html("textarea");
		
		$this->addClass("fw-textarea");
		
		$this->setName($name);
		$this->setValue($value);
	}

	/**
	* Get the content
	* @access public
	* @return String content
	*/
	public function getValue() {
		return $this->getInnerHtml();
	}

	/**
	* Set the content
	* @access public
	* @param String $value content
	* @return this
	*/
	public function setValue($value) {
		return $this->set($value);
	}

}
