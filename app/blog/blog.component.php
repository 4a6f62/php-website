<?php

require_once './lib/http.php';

class BlogComponent extends Component
{

	public static function init($param = null)
	{
		global $title, $description, $keywords;

		$url = 'https://www.jobcastrop.nl/restful/posts.php?limit=1000';

		$posts = json_decode(Http::get($url), true);
		$description = $title = 'Blog posts';

		$contents = '';
		foreach ($posts as $index => $post)
		{
			ob_start();
			require basename(__FILE__, '.php') . '.tpl';
			$contents .= ob_get_contents();
			ob_end_clean();
		}

		return $contents;
	}
}

?>