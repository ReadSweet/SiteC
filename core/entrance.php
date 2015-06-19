<?php
/*
	ReadSweet SiteC PHP File
	Copyright © 2015 ReadSweet.
	/core/entrance.php
*/

// Now load the preprocessing files.
require_once RSSC_ROOT_CORE . '/class.php';
require_once RSSC_ROOT_CORE . '/analyze.php';

// Now load the direction file.
require_once RSSC_ROOT_SCRIPT . '/direct/direct.php';

// Now load files for the application page.
require RSSC_ROOT_APP . RSSCKernel::$Direct['Page'];
require RSSC_ROOT_TEMPLATE . '/' . $TempPage->TemplateName . '/info.php';
RSSCKernel::$CurrentTemplate = $TempTemplate;
RSSCKernel::$CurrentTemplate->AssociatedPage = $TempPage;
if (!empty(RSSCKernel::$CurrentTemplate->AssociatedPage->OperationFile))
	require RSSC_ROOT_APP . '/' . RSSCKernel::$CurrentTemplate->AssociatedPage->OperationFile;

RSSCKernel::$CurrentTemplate->Output();

?>