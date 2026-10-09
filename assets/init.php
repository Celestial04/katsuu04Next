<?php
// ---------- for debug..
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// ---------- passed $variables..
$date = date('d/m/Y H:i:s');
$langs = ['fr', 'en', 'jp'];
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$cooklang = isset($_COOKIE['lang']);



// ---------- "if", "then", "else"..
// languages set in browser
if(in_array($lang, $langs)) {
    $_ = require_once __DIR__ . "/i18n/{$lang}.php";
} else {
    $_ = require_once __DIR__ . "/i18n/en.php";
}

// languages selectable
// if(in_array($cooklang, $langs)) {
//     $_ = require_once __DIR__ . "/i18n/{$cooklang}.php";
// } else {
//     $_ = require_once __DIR__ . "/i18n/en.php";
// }?>