<?php
    try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');
    }
    catch(Exception $e){
        die('erreur: '.$e->getMessage());
    }
