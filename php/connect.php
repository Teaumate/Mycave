<?php
    try{
    $bdd = new PDO('mysql:host=localhost;dbname=u725582773_test;charset=utf8','u725582773_root','toor47');
    }
    catch(Exception $e){
        die('erreur: '.$e->getMessage());
    }

?>
