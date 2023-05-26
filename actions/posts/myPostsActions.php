<?php 

require('actions/database.php');

$getAllMyPosts = $bdd->prepare('SELECT id, titre, contenu FROM posts WHERE id_auteur=?');
$getAllMyPosts->execute(array($_SESSION['id']));