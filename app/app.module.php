<?php
	$title = $description = $keywords = $content = 'Hello World!';

	require_once './lib/component.php';
    require_once 'app-routing.module.php';

    function App($content)
    {
        echo $content;
    }
?>