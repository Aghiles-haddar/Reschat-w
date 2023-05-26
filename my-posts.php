
<?php require('./actions/posts/myPostsActions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include'includes/head.php';?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <?php 

    while($posts = $getAllMyPosts->fetch()){
        ?>
            <div className="middle-second-right">
                <h1 className="middle-second-h1" > <?php echo $posts['titre']; ?> </h1>
                <p className="middle-second-p" > <?php echo $posts['contenu'] ?> </p>
                <div className="middle-second-bottom">
                        
                    <div className="middle-profil">
                        <img className="middle-profil-img" src={imageprofil} alt="" />
                            <div className="profil-info">
                                <h6 className="profil-info-h6">Booba</h6>
                                <p className="profil-info-p">Il y'a <span className="span-info">12</span>minutes</p>
                            </div>
                    </div>
                    <a href="">Modifier le post</a>

                </div>
            </div>
        <?php
    }

    ?>
    
</body>
</html>