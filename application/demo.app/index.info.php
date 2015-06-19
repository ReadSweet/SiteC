<?php
/*
	ReadSweet SiteC PHP File
	Copyright © 2015 ReadSweet.
	/application/demo.app/index.info.php
*/

$TempPage = new RSSCPage();

$TempPage->TemplateName = 'demo.template';
$TempPage->OperationFile = 'demo.app/index.operate.php';
$TempPage->OutputFile[1] = 'demo.app/index.output.php';

?>