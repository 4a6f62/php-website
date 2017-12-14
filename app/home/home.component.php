<?php

class HomeComponent extends Component
{

	public static function init($param = null)
	{
		global $title, $description, $keywords;

		$url = 'https://www.jobcastrop.nl/restful/page.php?name=home';
		$page = json_decode(Http::get($url));

		$title = $page->title;
		$description = trim(strip_tags($page->description));
		$keywords = trim(strip_tags($page->keywords));

		$url = 'https://www.jobcastrop.nl/restful/posts.php?limit=5';
		$posts = json_decode(Http::get($url), true);

		ob_start();
		require basename(__FILE__, '.php') . '.tpl';
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
}

?>