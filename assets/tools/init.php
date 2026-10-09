<?php
// passed variables
$date = date('d/m/Y H:i:s');
$langs = ['fr', 'en', 'jap'];
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$cooklang = isset($_COOKIE['lang']);

// "if", "then", etc..
if(in_array($lang, $langs)) {
    $_ = require_once __DIR__ . "/i18n/{$lang}.php";
} else {
    $_ = require_once __DIR__ . "/i18n/en.php";
}