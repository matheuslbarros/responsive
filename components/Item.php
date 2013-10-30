<?php

/**
 * This class implements an item of menu
 *
 * @author Matheus Lisboa de Barros
 */
class Item extends Html {

	/**
	* Constructor of class
	* @access public
	* @param String $content content of item
	* @return void
	*/
	public function Item($content = null) {
		parent::Html("li");
		
		$this->add($content);
	}

}
