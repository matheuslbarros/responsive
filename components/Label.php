<?php

/**
 * This class implements the label
 *
 * @author Matheus
 */
class Label extends Html {

	/**
	* Constructor of class
	* @access public
	* @param String $name reference to input
	* @param String $title title of label
	* @return void
	*/
	public function Label($name = null, $title = null) {
		parent::Html("label");
		
		$this->setAttribute("for", $name);
		$this->addClass("fw-label");
		
		$this->add($title);
	}

}
