<?php 

require('actions/database.php');

$getAllAnswersOfThisPost = $bdd->prepare('SELECT * FROM answers WHERE id_post = ? ORDER BY id DESC ');
$getAllAnswersOfThisPost->execute(array($_GET['id']));