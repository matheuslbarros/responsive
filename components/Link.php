<?php

/**
 * This class implements the link
 *
 * @author Matheus Lisboa de Barros
 */
class Link extends Html {

	/**
	* Constructor of class
	* @access public
	* @param String $label label of link
	* @param String $href the link
	* @return void
	*/
	public function Link($label, $href = "#") {
		parent::Html("a");
		
		$this->add($label);
		$this->setAttribute("href", $href);
		
		$this->addClass("fw-link");
	}

}
