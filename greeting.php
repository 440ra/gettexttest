<?php

/* 後ほど切り替えてテストする */
//$lang = "ja_JP.UTF-8";
//$lang = "en_US.UTF-8";

/* 翻訳ファイル名 */
$domain = "messages";

setlocale(LC_ALL, $lang);

/* 翻訳ファイルの置き場を指定 */
bindtextdomain($domain, "./locale/");

/* 翻訳ファイル名の指定 */
textdomain($domain);

/* _()はgettext()のエイリアス。これで囲む */
echo _("greeting");
?>
