<?php

// <link rel="stylesheet" href="css/foundation.min.css" />
// <script src="http://foundation.zurb.com/public/assets/marketing_docs.js"></script>

// function __autoload($className) {
	// $file = "components/" . $name . ".php";
	// if( file_exists($file) ) {
		// include_once($file);
	// }
// }

spl_autoload_register(
	function($className) {
		include("components/" . $className . ".php");
	}
);

?>