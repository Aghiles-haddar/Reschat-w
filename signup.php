<?php require('actions/users/signupAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
        <form className="form-signup" method="POST">
            <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>
            <input type="text" placeholder="Nom d'utilisateur" name="pseudo"/>
            <input type="email" placeholder="Adresse mail" name="email"  />
            <input type="password" placeholder="Mot de passe" name="password" />
            <input type="password" placeholder="Confirmez votre mot de passe" name="confirmation" />
            <button type="submit" class="btn-form" name="validate" >S'inscrire</button>
            <a href="login.php"><p>j'ai déja un compte je me connecte</p></a>
        </form>

</body>
</html>