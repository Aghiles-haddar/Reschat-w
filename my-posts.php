
<?php 
    require('actions/users/securityAction.php');
    require('actions/posts/myPostsActions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include'includes/head.php';?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <?php 

    while($posts = $getAllMyPosts->fetch(PDO::FETCH_ASSOC)){



        ?>
            <div className="middle-second-right">
                <h1 className="middle-second-h1" > <?php echo $posts['titre']; ?> </h1>
                <p className="middle-second-p" > <?php echo $posts['contenu'] ?> </p>
                <div className="middle-second-bottom">
                        
                    <div className="middle-profil">
                        <img className="middle-profil-img" src={imageprofil} alt="" />
                            <div className="profil-info">
                                <h6 className="profil-info-h6">  <?php echo $posts['pseudo_auteur'] ?> </h6>
                                <p className="profil-info-p"><?php echo $posts['date_publication'] ?></p>
                            </div>
                    </div>
                    <a href="">Acceder au poste</a>
                    <a href="edit-posts.php?id=<?php echo $posts['id'] ?>">Modifier le post</a> 
                    <a href="edit-posts.php?id=<?php echo $posts['id'] ?>">Supprimer le post</a> 
                </div>
            </div>
        <?php
    }

    ?>
    
</body>
</html>