<?php 

session_start();
if(!isset($_SESSION['auth'])){ 
    // la variable session auth est declaré quand l'utilisateur est sur notre site dans loginAction.php
    header('Location: ../../login.php');
}



require('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfTheAnswer = $_GET['id'];

    $checkIfAnswerExists = $bdd->prepare('SELECT id_auteur, id FROM answers WHERE id = ?');
    $checkIfAnswerExists->execute(array($idOfTheAnswer));

    if($checkIfAnswerExists->rowCount() > 0){

        $answersInfos = $checkIfAnswerExists->fetch();
        if($answersInfos['id_auteur'] == $_SESSION['id'] OR $_SESSION['id'] == 5){
            
            $deleteThisAnswer = $bdd->prepare('DELETE FROM answers WHERE id = ?');
            $deleteThisAnswer->execute(array($idOfTheAnswer));

            header('Location: ../../my-posts.php');

        }else{
            echo "Vous n'avez pas le droit de supprimer un commentaire qui ne vous appartient pas !";
        }

    }else{
        echo "Aucune commentaire n'a été trouvée 2";
    }


}else{
    echo"Aucune commentaire n'a été trouvée";
}