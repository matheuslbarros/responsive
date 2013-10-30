<?php

/**
 * This class implements the component tabs
 *
 * @author Matheus
 */
class Tabs extends Html {

	private $title;
	private $content;

	public function Tabs() {
		parent::Html("div");
		
		$this->title   = $this->addElement("dl")->addClass("tabs");
		$this->content = $this->addElement("ul")->addClass("tabs-content");
	}

	public function addPanel($name, $content, $active = false) {
		$this->title
			->addElement("dd")
				->addClass($active ? "active" : "")
				->addElement("a")
					->setAttribute("href", "#tabs-" . $name)
					->add($name);
		
		$this->content
			->addElement("li")
				->addClass($active ? "active" : "")
				->setAttribute("id", "tabs-" . $name . "Tab")
				->add($content);
	}

}
