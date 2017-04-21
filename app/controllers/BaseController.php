<?php
/**
* BaseController
*/
class BaseController
{
	
	function __construct()
	{
		
	}

	public function display($path, $array) {
		extract($array);
		require dirname(__FILE__).'/../views/' . $path . '.php';
	}
}