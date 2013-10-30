<?php

/**
 * This class implements the menu component
 *
 * @author Matheus
 */
class Menu extends Html {

	/**
	* Constructor of class
	* @access public
	* @param Array $items array of items
	* @return void
	*/
	public function Menu($items = null) {
		parent::Html("ul");
		
		$this->addClass("tabs vertical hide-on-phones");
		
		if( is_array($items) ) {
			foreach($items as $item) {
				$this->add($item);
			}
		}
	}

	/**
	* Append item
	* @access public
	* @param String $content content of item
	* @return this
	*/
	public function addItem($content) {
		$this->add(new Item($content));
	}

	/**
	* Append link
	* @access public
	* @param String $name title of link
	* @param String $href url of link
	* @return this
	*/
	public function addLink($name, $href = "#") {
		$this->addItem(new Link($name, $href));
	}

}
