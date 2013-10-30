<?php

/**
 * This class implements the html element
 *
 * @author Matheus
 */
class Html {

	private $type;
	private $father;

	public function setParent($parent) {
		$this->father = $parent;
		return $this;
	}

	public function getParent() {
		return $this->father;
	}

	private $childs = array();
	private $attributes = array();

	/**
	* Constructor of class
	* @access public
	* @param String $type html type
	* @return void
	*/
	public function Html($type) {
		$this->type = $type;
	}

	/**
	* Get specific child with a name
	* @access public
	* @param String $name name of child
	* @return Html|String html or a string content
	*/
	public function get($name) {
		if( isset($this->childs[$name]) ) {
			return $this->childs[$name];
		}
		return null;
	}

	/**
	* Set child to the element
	* @access public
	* @param Html|String $child html element or a string content
	* @return this
	*/
	public function set($child) {
		$this->childs = array($child);
	}

	/**
	* Append child to element
	* @access public
	* @param Html|String $child html element or a string content
	* @param String $name name for child
	* @return this
	*/
	public function add($child, $name = false) {
		if( $name ) {
			$this->childs[$name] = $child;
		} else {
			$this->childs[] = $child;
		}
		return $this;
	}

	/**
	* Get the content of element
	* @access public
	* @return String content
	*/
	public function getInnerHtml() {
		$html = "";

		foreach($this->childs as $child) {
			if( is_object($child) ) {
				$html .= $child->__toString();
			} else {
				$html .= $child;
			}
		}

		return $html;
	}

	/**
	* Remove attribute of element
	* @access public
	* @param String $name name of attribute
	* @return this
	*/
	public function removeAttribute($name) {
		if( isset($this->attributes[$name]) ) {
			unset($this->attributes[$name]);
		}
		return $this;
	}

	/**
	* Get attribute value of element
	* @access public
	* @param String $name name of attribute
	* @param String $default value default for attribute
	* @return String
	*/
	public function getAttribute($name, $default = null) {
		if( isset($this->attributes[$name]) ) {
			return $this->attributes[$name];
		}
		return $default;
	}

	/**
	* Set attribute value of element
	* @access public
	* @param String $name name of attribute
	* @param String $value value for attribute
	* @return this
	*/
	public function setAttribute($name, $value) {
		$this->attributes[$name] = $value;
		return $this;
	}

	/**
	* Remove a specific class of element
	* @access public
	* @param String $name name of attribute class
	* @return this
	*/
	public function removeClass($name) {
		if( isset($this->attributes["class"][$name]) ) {
			unset($this->attributes["class"][$name]);
		}
		return $this;
	}

	/**
	* Add a class to the element
	* @access public
	* @param String $name name of attribute class
	* @return this
	*/
	public function addClass($name) {
		$this->attributes["class"][$name] = $name;
		return $this;
	}

	/**
	* Remove a specific style of element
	* @access public
	* @param String $name name of style attribute
	* @return this
	*/
	public function removeStyle($name) {
		if( isset($this->attributes["style"][$name]) ) {
			unset($this->attributes["style"][$name]);
		}
		return $this;
	}

	/**
	* Add a style to the element
	* @access public
	* @param String $name name of style attribute
	* @return this
	*/
	public function addStyle($name, $value) {
		$this->attributes["style"][$name] = $value;
		return $this;
	}

	/**
	* Return an element of type
	* @access public
	* @param String $type type of element
	* @return String
	*/
	public function newElement($type) {
		return new Html($type);
	}

	/**
	* Add an element and return
	* @access public
	* @param String $type type of element
	* @return String
	*/
	public function addElement($type) {
		$element = $this->newElement($type)->setParent($this);
		
		$this->add($element);
		
		return $element;
	}

	/**
	* Magic Method: return the html of element
	* @access public
	* @return String
	*/
	public function __toString() {
		return $this->getHtml();
	}

	/**
	* Return the html of element
	* @access public
	* @return String
	*/
	public function getHtml() {
		$html = '<' . $this->type;
		
		foreach($this->attributes as $name => $data) {
			$html .= $this->getHtmlAttribute($name, $data);
		}
		
		if( in_array($this->type, array('input', 'img', 'hr', 'br', 'meta', 'link')) ) {
			$html .= '/>';
		} else {
			$html .= '>';
			$html .= $this->getInnerHtml();
			$html .= '</' . $this->type . '>';
		}
		
		return $html;
	}

	private function getHtmlAttribute($name, $data) {
		switch($name) {
			case "style" : $data = $this->getHtmlAttributeStyle($data); break;
			case "class" : $data = $this->getHtmlAttributeClass($data); break;
		}
		
		return " " . $name . '="' . $data . '"';
	}

	private function getHtmlAttributeStyle($data) {
		$html = array();
		foreach($data as $name => $value) {
			$html[] = $name . ':' . $value;
		}
		return implode(';', $html);
	}

	private function getHtmlAttributeClass($data) {
		$html = array();
		foreach($data as $value) {
			$html[] = $value;
		}
		return implode(' ', $html);
	}

}
