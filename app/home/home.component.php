<?php
    class HomeComponent
    {
        public static function init($param = null)
		{
			ob_start();
			require basename(__FILE__, '.php') . '.html';
			$contents = ob_get_contents();
			ob_end_clean();
			return $contents;
		}
    }
?>