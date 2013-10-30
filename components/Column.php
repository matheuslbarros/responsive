<?php

/**
 * This class implements the column of grid
 *
 * @author Matheus Lisboa de Barros
 */
class Column extends Html {

	public static $SIZES = array("zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve");

	/**
	* Constructor of class
	* @access public
	* @param Integer $size size of column
	* @param Html|String $content content of column
	* @return void
	*/
	public function Column($size, $content = null) {
		parent::Html("div");
		
		$this->addClass("columns");
		$this->addClass($this->getSizeName($size));
		
		if( $content ) {
			$this->add($content);
		}
	}

	/**
	* Get the size name
	* @access private
	* @param Integer $size size of column
	* @return String name of size column
	*/
	private function getSizeName($size) {
		return Column::$SIZES[$size];
	}

}
