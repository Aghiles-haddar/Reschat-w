 <?php 

 require('actions/database.php');

 $getAllPosts = $bdd->query('SELECT * FROM posts ORDER BY id DESC LIMIT 0,5');

 if(isset($_GET['search']) AND !empty($_GET['search'])){

    $usersSearch = $_GET['search'];

    $getAllPosts = $bdd->query('SELECT * FROM posts WHERE tags LIKE "%'.$usersSearch.'%" ORDER BY id DESC    ');

 }
