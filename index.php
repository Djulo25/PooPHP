<?php ob_start(); //start c'est comme une bannane dans un pot d'échappement  ?>  
<h1>Accueil</h1>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
$title = 'Accueil';
$content = ob_get_clean();
require_once 'Template.php'; //clean c'est comme retirer la banane du pots d'échappement