<?php

/**
 * This class implements the accordion
 *
 * @author Matheus Lisboa de Barros
 */
class Accordion extends Html {

	public function Accordion() {
		parent::Html("ul");
		
		$this->addClass("accordion");
		$this->addClass("fw-accordion");
	}

	public function addPanel($title, $content, $active = false) {
		$this
			->addElement("li")
				->addClass($active ? "active" : "")
				->addElement("div")
					->addClass("title")
					->add($title)
					->getParent()
				->addElement("div")
					->addClass("content")
					->add($content);
	}

}
