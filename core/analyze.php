<?php
/*
	ReadSweet SiteC PHP File
	Copyright © 2015 ReadSweet.
	/core/analyze.php
*/

// Now analyze the URI structure as well as the query string.
// Note: $t1, $t2, ..., $t7 are all temporary variables.
$t1 = array();
$t2 = strstr($_SERVER['REQUEST_URI'], '?', true);
RSSCKernel::$Path[-1] = $t2 ? $t2 : $_SERVER['REQUEST_URI'];
$t3 = preg_match_all('/\/([a-zA-Z0-9_]+)/', RSSCKernel::$Path[-1], $t1, PREG_SET_ORDER);
RSSCKernel::$Path[0] = $t3;
for ($t4 = 0; $t4 < $t3; $t4++)
	RSSCKernel::$Path[$t4 + 1] = $t1[$t4][1];
$t5 = array();
$t6 = preg_match_all('/([a-zA-Z0-9_]+)(?:=([a-zA-Z0-9_]*))?/', strstr($_SERVER['REQUEST_URI'], '?'), $t5, PREG_SET_ORDER);
RSSCKernel::$Query[0] = $t6;
for ($t7 = 0; $t7 < $t6; $t7++)
	RSSCKernel::$Query[$t7 + 1] = array('Name' => $t5[$t7][1], 'Value' => isset($t5[$t7][2]) ? $t5[$t7][2] : '');

?>