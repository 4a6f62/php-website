<?php

class HomeComponent extends Component
{

	public static function init($param = null)
	{
		$test = 'test';

		ob_start();
		require basename(__FILE__, '.php') . '.tpl';
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
}

?>