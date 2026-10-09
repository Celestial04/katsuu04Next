<?php require('assets/tools/init.php')?>

<!<html lang="<?php echo htmlspecialchars($lang);?>">

<h1><?php echo htmlspecialchars($_['index.title']);?></h1>

<button onclick="<?php setcookie('lang', htmlspecialchars("fr"), strtotime( '+30 days' ))?>">Ajouter le cookie</button>