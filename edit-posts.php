<?php
require('actions/users/securityAction.php');
require('actions/posts/getInfosOfEditedPostAction.php');
require('actions/posts/editPostsAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <?php if(isset($errorMsg)){
            echo '<p>'.$errorMsg.'</p>';
            }elseif(isset($successMsg))
            echo '<p>'.$successMsg.'</p>';
    ?>
    <?php 
    if(isset($post_content)){
        ?>
        <form className="form-signup" method="POST">
            <label for="">Titre du post</label>
            <input type="text" name="title" value="<?= $post_title ?>" />
            <label for="">Tag du post</label>
            <input type="text" name="tag" value="<?= $post_tag ?>" />
            <label for="">Le post</label>
            <textarea name="content"> <?= $post_content ?> </textarea>
            <button type="submit" class="btn-form" name="validate" >Modifier le post</button>
        </form>
        <?php 
    }
    ?>

    
</body>
</html>