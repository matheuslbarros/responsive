<?php

/**
 * This class implements the grid
 *
 * @author Matheus
 */
class Grid extends Html {

	/**
	* Constructor of class
	* @access public
	* @param Array $columns columns of grid
	* @return void
	*/
	public function Grid($columns = null) {
		parent::Html("div");
		
		$this->addClass("fw-grid");
		
		if( is_array($columns) ) {
			$this->addRow($columns);
		}
	}

	/**
	* Append columns child to element
	* @access public
	* @param Array $columns array of element Column
	* @return this
	*/
	public function addRow($columns) {
		$this
			->addElement("div")
			->addClass("row")
			->add(implode($columns));
		
		return $this;
	}

}
