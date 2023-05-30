<?php 
    session_start();
    require('actions/posts/ShowAllPostsAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container">

        <form method="GET" >
            <input type="search" name="search">
            <button type="submit" >Valider</button>
        </form>

        <br>

        <?php

            

            while($post = $getAllPosts->fetch()){
                ?>
                <div className="middle-second-right">
                    <h1 className="middle-second-h1" > <?php echo $post['titre']; ?> </h1>
                    <p className="middle-second-p" > <?php echo $post['tags'] ?> </p>
                    <p className="middle-second-p" > <?php echo $post['contenu'] ?> </p>
                    <div className="middle-second-bottom">
                            
                        <div className="middle-profil">
                            <img className="middle-profil-img" src={imageprofil} alt="" />
                                <div className="profil-info">
                                    <h6 className="profil-info-h6"> Publié par <?php echo $post['pseudo_auteur'] ?> </h6>
                                    <p className="profil-info-p"><?php echo $post['date_publication'] ?></p>
                                    <a href="article.php?id=<?php echo $post['id']; ?>">Accéder à la question</a>
                                    <?php
                                        if($_SESSION['id'] == 5 || $_SESSION['id'] == $post['id_auteur']){
                                            ?>
                                                <a href="actions/posts/deletePostsActions.php?id='.$post['id'].'">Supprimer le post</a>;
                                            <?php
                                            
                                        }
                                    ?>
                                </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        ?>

    </div>
    
</body>
</html>