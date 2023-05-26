<?php
session_start();
require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);

        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $checkIfUserExists->execute(array($user_email));

        if($checkIfUserExists->rowCount() > 0){
            
            $usersInfos = $checkIfUserExists->fetch();

            if(password_verify($user_password, $usersInfos['mdp'])){
                
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['email'] = $usersInfos['email'];

            header('Location: index.php');
    
            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }

        }else{
            $errorMsg = "Votre mail est incorrect...";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}