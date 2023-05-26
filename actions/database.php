<?php

try{
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=globaldata;charset=utf8' , 'root', 'root');
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

