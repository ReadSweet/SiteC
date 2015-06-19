<?php
/*
	ReadSweet SiteC PHP File
	Copyright © 2015 ReadSweet.
	/direct/direct.php
*/

if (RSSCKernel::$Path[0] == 0) {
	RSSCKernel::$Direct['Application'] = 'demo.app';
	RSSCKernel::$Direct['Page'] = '/demo.app/index.info.php';
} else
	switch (RSSCKernel::$Path[1]) {
		default:
			// The developing work is not finished yet.
			echo '<br />The developing work is not finished yet!<br />Please check our repository for updates.';
			exit;
	}

?>