<?php
/*
	ReadSweet SiteC PHP File
	Copyright © 2015 ReadSweet.
	/core/class/classTemplate.php
*/

class RSSCTemplate {
	// $AssociatedPage: The page associated with this template. The type should be RSSCPage.
	public $AssociatedPage = null;
	
	/* $OutputOrder: The order of the items to be output.
	 * [0]: The number of items.
	 * [1-n]: Each item is an array.
	 *        ['Source']: 'template' means that the output item comes from the template, while 'page' means that the output item comes from the page.
	 *        ['File']: The filename when ['Source'] is set to be 'template'.
	 */
	public $OutputOrder = array(0 => 0);
	
	// Output(): Output the page in order.
	public function Output() {
		$t2 = 0;
		for ($t1 = 1; $t1 <= $this->OutputOrder[0]; $t1++)
			if ($this->OutputOrder[$t1]['Source'] == 'template')
				require_once RSSC_ROOT_TEMPLATE . '/' . $this->AssociatedPage->TemplateName . '/' . $this->OutputOrder[$t1]['File'];
			else if ($this->OutputOrder[$t1]['Source'] == 'page') {
				$t2++;
				require_once RSSC_ROOT_APP . '/' . $this->AssociatedPage->OutputFile[$t2];
			}
	}
}

?>