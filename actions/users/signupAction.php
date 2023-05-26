<?php

require('actions/database.php');
// pour savoir si l'utilisateur appuie sur le bouton
if(isset($_POST['validate'])){ 

    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, email, mdp) VALUE(?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_email, $user_password));

            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, email FROM users WHERE pseudo = ? AND email = ?');
            $getInfosOfThisUserReq->execute(array($user_pseudo, $user_email));

            $usersInfos = $getInfosOfThisUserReq->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];
            $_SESSION['email'] = $usersInfos['email'];

            header('Location: index.php');

        }else{
            $errorMsg = "Veuillez mettre un autre nom d'utilisateur";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs de formulaire";
    }

}