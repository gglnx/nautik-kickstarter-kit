<?php
/**
 * @package     PROJECT NAME
 * @version     VERSION
 * @link        URL
 * @author      YOUR NAME <YOUR MAIL>
 * @copyright   Copyright YEAR, YOUR NAME
 */
 
/**
 * Namespace
 */
namespace Application\Controllers;

/**
 *
 */
class Pages extends MasterController {
	public function indexAction() {
		// Display homepage
	}
	
	public function renderAction() {
		// Check if template exists
		if ( false == file_exists( $template = 'pages/' . $this->attr('page') ) )
			return $this->render404();

		// Use custom template
		$this->useTemplate($template);
	}
}
