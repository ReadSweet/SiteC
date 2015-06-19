<?php
/*
	ReadSweet SiteC PHP File
	Copyright © 2015 ReadSweet.
	/template/demo.template/info.php
*/

$TempTemplate = new RSSCTemplate();

$TempTemplate->OutputOrder = array(
	0 => 3,
	1 => array('Source' => 'template', 'File' => 'head.php'),
	2 => array('Source' => 'page'),
	3 => array('Source' => 'template', 'File' => 'foot.php')
)

?>