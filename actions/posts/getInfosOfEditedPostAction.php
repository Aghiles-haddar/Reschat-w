<?php 
require('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id']) ){

    $idOfQuestion = $_GET['id'];

    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM posts WHERE id=?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        $questionInfos = $checkIfQuestionExists->fetch();
        if($questionInfos['id_auteur'] == $_SESSION['id'] OR $_SESSION['id'] == '5' ){

            $post_title = $questionInfos['titre'];
            $post_tag = $questionInfos['tags'];
            $post_content = $questionInfos['contenu'];
            
            $post_content = str_replace( '<br />', '', $post_content );

        }else{
            $errorMsg = "Vous n'étes pas l'auteur du post";
        }

    }else{
        $errorMsg = "Auncun post n'a été retrouvé";
    }
    
     

}else{
    $errorMsg = "Aucun post n'a été retrouvé";
}