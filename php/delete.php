<?php
session_start();
require 'connect.php';
print_r($_POST['Del_rec']);
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])){
    $req = $bdd->prepare('DELETE FROM mycave WHERE id=?');
    $req->execute(array($_POST['Del_rec']));
    $msg='Enregistrement supprimé';
    header('Location: ../index.php?msg='.$msg);
}
header('Location: ../index.php?page='.$_SESSION['page']);