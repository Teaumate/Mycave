<?php
include 'connect.php';

$pass_hash = sha1($_POST['pswd'] );
$login = $_POST['login'];

$req = $bdd->prepare('SELECT id FROM user WHERE login= :loginReq AND pswd = :pswdReq');
$req->execute(array(
    'loginReq'=>$login,
    'pswdReq'=>$pass_hash
));
$resultat = $req->fetch();
if(!$resultat){
    echo 'Mauvais identifiant ou mot de passe !';
    //header('Location: login.php?msg=erreur');
}else{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $login;
    header('Location: ../index.php');
}
?>