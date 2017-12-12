<?php
    require_once 'home/home.component.php';
    require_once 'page/page.component.php';
    require_once 'blog/blog.component.php';
    require_once 'post/post.component.php';

    class appRouting
    {
        const routes = [
			['\/', 'HomeComponent'],
			['\/about', 'PageComponent'],
			['\/blog', 'BlogComponent'],
			['\/blog\/(.*)', 'PostComponent'],
        ];

        public static function route()
        {
			return self::getRoute();
		}

        private static function getRoute()
		{
			$base = str_replace(array('/index.php', '/beheer.php'), '', $_SERVER['PHP_SELF']);
			$request = str_replace($base, '', $_SERVER['REQUEST_URI']);


			foreach(self::routes as $route)
			{
				$regx = '/^' . $route[0] . '$/';
				if(preg_match($regx, $request, $match))
				{
					return $route[1]::init($match);
				}
			}

			return self::noRoute();
		}

		private function noRoute()
		{

		}
    }

    $content = appRouting::route();
?>