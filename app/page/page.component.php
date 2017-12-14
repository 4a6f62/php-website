<?php

require_once './lib/http.php';

class PageComponent extends Component
{

	public static function init($param = null)
	{
		global $title, $description, $keywords;

		$url = 'https://www.jobcastrop.nl/restful/page.php?name=' . $param[1];

		$page  = json_decode(Http::get($url));

		$title = $page->title;
		$description = trim(strip_tags($page->description));
		$keywords = trim(strip_tags($page->keywords));

		ob_start();
		require basename(__FILE__, '.php') . '.tpl';
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
}

?>