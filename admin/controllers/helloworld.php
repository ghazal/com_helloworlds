<?php
/*------------------------------------------------------------------------
# helloworld.php - Hello World Component
# ------------------------------------------------------------------------
# author    Caleb Nance
# copyright Copyright (C) 2013. All Rights Reserved
# license   GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
# website   www.codelydia.com
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controllerform library
jimport('joomla.application.component.controllerform');

/**
 * Helloworlds Controller Helloworld
 */
class HelloworldsControllerhelloworld extends JControllerForm
{
	public function __construct($config = array())
	{
		$this->view_list = 'helloworlds'; // just incase the singular is not exactly plural, set the return view listing to the main view.
		parent::__construct($config);
	}

}
?>