<?php

require_once './lib/http.php';

class PageComponent extends Component
{

	public static function init($param = null)
	{
		global $title, $description, $keywords;

		$url = 'https://www.jobcastrop.nl/restful/page.php?name=' . $param[1];

		$page  = json_decode(Http::get($url));

		if(!$page)
		{
			header("HTTP/1.0 404 Not Found");
			$description = $title = '404';
			return '<h1>Pagina niet gevonden.</h1>';
		}

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