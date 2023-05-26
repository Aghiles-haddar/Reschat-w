<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include'includes/head.php'; ?>
<body>
    <form className="form-signup" method="POST">
        <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>
        <input type="email" placeholder="Adresse mail" name="email"  />
        <input type="password" placeholder="Mot de passe" name="password" />
        <button type="submit" class="btn-form" name="validate" >Se connecter</button>
        <a href="signup.php"><p>je n'ai pas de compte je m'inscris</p></a>
    </form>
</body>
</html>