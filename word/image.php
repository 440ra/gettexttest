<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="x-ua-compatible" content="IE=edge">
<title>template</title>
<link href="_common/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
<div class="header-contents">

<?php

/* 後ほど切り替えてテストする */
$lang = "ja_JP.UTF-8";
//$lang = "en_US.UTF-8";

/* 翻訳ファイル名 */
$domain = "image";

setlocale(LC_ALL, $lang);

/* 翻訳ファイルの置き場を指定 */
bindtextdomain($domain, "./locale/");

/* 翻訳ファイル名の指定 */
textdomain($domain);
?>
<h1><?php echo _("image test")?></h1>
<!--<h2></h2>-->
</div><!-- /.header-contents -->
</header>
<div class="main-wrapper">
<section>
	<p><?php echo _("It's Englis data.")?></p>
	<p><img src=<?php echo _("\"image/en/langage.png\"")?> ></p>
</section>
</div><!-- /.main-wrapper -->
<footer>JavaScript Samples</footer>
</body>
</html>
