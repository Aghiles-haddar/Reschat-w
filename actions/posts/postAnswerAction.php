<?php
require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));

        $insertAnswer = $bdd->prepare('INSERT INTO answers(id_auteur, pseudo_auteur,id_post, contenu ) VALUE(?,?,?,?) ');
        $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $_GET['id'], $user_answer));

    }

}