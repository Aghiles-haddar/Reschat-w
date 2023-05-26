<?php
 require('actions/posts/publishpostAction.php');
 require('actions/users/securityAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php require('includes/navbar.php') ?>
    <form className="form-signup" method="POST">
        <?php if(isset($errorMsg)){
            echo '<p>'.$errorMsg.'</p>';
            }elseif(isset($successMsg))
            echo '<p>'.$successMsg.'</p>';
             ?>
        <label for="">Titre du post</label>
        <input type="text" name="title"/>
        <label for="">Le post</label>
        <textarea name="content"></textarea>
        <button type="submit" class="btn-form" name="validate" >Poster</button>
    </form>
</body>
</html>