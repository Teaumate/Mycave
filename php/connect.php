<?php
    try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','toor');
    }
    catch(Exception $e){
        die('erreur: '.$e->getMessage());
    }
