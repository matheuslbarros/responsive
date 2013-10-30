<?php

/**
 * This class implements the image element
 *
 * @author Matheus
 */
class Image extends Html {

	/**
	* Constructor of class
	* @access public
	* @param String $src source of image
	* @param String $width width of image
	* @param String $height height of image
	* @return void
	*/
	public function Image($src, $width = null, $height = null) {
		parent::Html("img");
		
		$this->setAttribute("src", $src);
		
		if( $width ) {
			$this->setAttribute("width", $width);
		}
		
		if( $height ) {
			$this->setAttribute("height", $height);
		}
	}

}
