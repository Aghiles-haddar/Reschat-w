<?php 

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['tag'])){

        $new_post_title = htmlspecialchars($_POST['title']);
        $new_post_tag = htmlspecialchars($_POST['tag']);
        $new_post_content = htmlspecialchars($_POST['content']);

        $editPostOnWebsite = $bdd->prepare('UPDATE posts SET titre = ?, tags = ?, contenu = ? WHERE id = ?');
        $editPostOnWebsite->execute(array($new_post_title,$new_post_tag, $new_post_content, $_GET['id']));


        header('Location: my-posts.php');

    }else{
        $errorMsg = "Veuillez remplir tous les champs";
    }

}