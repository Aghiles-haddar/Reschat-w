<?php

require('actions/database.php');
 
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfThePost = $_GET['id'];
    $checkIfPostExists = $bdd->prepare('SELECT * FROM posts WHERE id = ?');
    $checkIfPostExists->execute(array($idOfThePost));

    if($checkIfPostExists->rowCount() > 0 ){

        $PostInfos = $checkIfPostExists->fetch();

        $Post_title = $PostInfos['titre'];
        $Post_tag = $PostInfos['tags'];
        $Post_content = $PostInfos['contenu'];
        $Post_id_author = $PostInfos['id_auteur'];
        $Post_pseudo_author = $PostInfos['pseudo_auteur'];
        $Post_publication_date = $PostInfos['date_publication'];


    }else{
        $errorMsg =  "Aucun post n'a été trouvé";
    }

}else{
    $errorMsg = "Aucune post n'a été trouvé";
}