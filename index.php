<?php require('assets/init.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); ?>

<html lang="<?php echo htmlspecialchars($lang); ?>">
<div class="index header">
    <h1><?php echo htmlspecialchars($_['index.title']); ?></h1>
    <h2><?php echo htmlspecialchars($_['index.subtitle']); ?></h2>
    <h3><?php echo htmlspecialchars($_['index.subtitle.subtitle']); ?></h3>
</div>
<hr>
<button onclick="<?php setcookie('lang', htmlspecialchars("fr"), strtotime('+30 days')) ?>">FR</button>
<button onclick="<?php setcookie('lang', htmlspecialchars("en"), strtotime('+30 days')) ?>">EN</button>
<button onclick="<?php setcookie('lang', htmlspecialchars("jp"), strtotime('+30 days')) ?>">JP</button>