<?php

require_once './lib/http.php';

class PostComponent extends Component
{

	public static function init($param = null)
	{
		global $title, $description, $keywords;

		$url = 'https://www.jobcastrop.nl/restful/post.php?name=' . $param[1];

		$post = json_decode(Http::get($url));

		if(!$post)
		{
			header("HTTP/1.0 404 Not Found");
			$description = $title = '404';
			return '<h1>Post niet gevonden.</h1>';
		}

		$title = $post->title;
		$description = trim(strip_tags($post->shorttext));

		ob_start();
		require basename(__FILE__, '.php') . '.tpl';
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
}

?>