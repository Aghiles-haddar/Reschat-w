<?php 

session_start();
if(!isset($_SESSION['auth'])){ 
    // la variable session auth est declaré quand l'utilisateur est sur notre site dans loginAction.php
    header('Location: ../../login.php');
}

require('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfThePost = $_GET['id'];

    $checkIfPostExists = $bdd->prepare('SELECT id_auteur FROM posts WHERE id = ?');
    $checkIfPostExists->execute(array($idOfThePost));

    if($checkIfPostExists->rowCount() > 0){

        $postsInfos = $checkIfPostExists->fetch();
        if($postsInfos['id_auteur'] == $_SESSION['id'] OR $_SESSION['id'] == 5){
            
            $deleteThisPost = $bdd->prepare('DELETE FROM posts WHERE id = ?');
            $deleteThisPost->execute(array($idOfThePost));

            header('Location: ../../my-posts.php');

        }else{
            echo "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !";
        }

    }else{
        echo "Aucune question n'a été trouvée";
    }


}else{
    echo"Aucune question n'a été trouvée";
}