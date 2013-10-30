<?php

// function __autoload($className) {
	// include("components/" . $className . ".php");
// }

spl_autoload_register(
	function($className) {
		include("components/" . $className . ".php");
	}
);
