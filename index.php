<?php require('assets/init.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);?>

<html lang="<?php echo htmlspecialchars($lang); ?>">
<div class="index header">
    <h1><?php echo htmlspecialchars($_['index.title']); ?></h1>
    <h2><?php echo htmlspecialchars($_['index.subtitle']); ?></h2>
    <h3><?php echo htmlspecialchars($_['index.subtitle.subtitle']); ?></h3>
</div>