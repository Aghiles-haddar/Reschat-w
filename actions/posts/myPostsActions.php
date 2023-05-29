<?php 

require('actions/database.php');

$getAllMyPosts = $bdd->prepare('SELECT * FROM posts WHERE id_auteur = ? ORDER BY id DESC ');
$getAllMyPosts->execute(array($_SESSION['id']));