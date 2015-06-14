<?php
/*
	ReadSweet SiteC PHP File
	Copyright © 2015 ReadSweet.
	/static/index1.php
*/

// RSSC_ROOT_SCRIPT: The root path of the scripts for this site.
define ('RSSC_ROOT_SCRIPT', dirname(dirname(__file__)));

// Now load the file containing information.
require_once RSSC_ROOT_SCRIPT . '/info/info.local.php';

// Now go to the entrance of ReadSweet SiteC.
require_once RSSC_ROOT_CORE . '/entrance.php';

?>