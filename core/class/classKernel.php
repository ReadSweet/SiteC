<?php
/*
	ReadSweet SiteC PHP File
	Copyright © 2015 ReadSweet.
	/core/class/classKernel.php
*/

class RSSCKernel {
	// $CurrentTemplate: The template to be output. The type should be RSSCTemplate.
	public static $CurrentTemplate = null;
	
	/* $Path: The directory structure of the URI visited.
	 * [0]: The number of directories.
	 * [1-n]: The name of each directory.
	 */
	public static $Path = array(0 => 0);
	/* $Query: The query string.
	 * [0]: The number of queries.
	 * [1-n]: Each item represents a query, and is an array containing two subitems named 'Name' and 'Value'.
	 */
	public static $Query = array(0 => 0);
	
	/* $Direct: The result returned from the direction file.
	 * ['Application']: The application corresponding to the page visited.
	 * ['Page']: The information file corresponding to the page visited.
	 */
	public static $Direct = array('Application' => '', 'Page' => '');
}

?>