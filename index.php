<?php require_once "app/app.module.php"; ?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title><?=$title;?></title>
  <meta name="author" content="jobcastrop.nl">
  <meta name="description" content="<?=$description;?>">
  <meta name="keywords" content="<?=$keywords;?>">
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <app-root>
      <nav>
          <a href="/">Home</a>
          <a href="/about">About</a>
          <a href="/blog">Blog</a>
          <a href="/contact">Contact</a>
      </nav>

      <?php Component:App($content); ?>
  </app-root>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-7985599-1', 'auto'); 
  </script>
</body>
</html>