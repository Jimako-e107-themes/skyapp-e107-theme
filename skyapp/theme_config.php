<?php

if (!defined('e107_INIT')) { exit; }

e107::lan('theme', 'admin',true);

// Theme Configuration File.
class theme_config implements e_theme_config
{
	function config($type='front')
	{
		$fields = array(
			'branding'          => array('title'=>LAN_THEMEPREF_00, 'type'=>'dropdown', 'writeParms'=>array('optArray'=> $brandingOpts)),
		);
		return $fields;
	}

 
}
 