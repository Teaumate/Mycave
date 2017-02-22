<?php
session_start();

require 'php/connect.php';
require("libs/Smarty.class.php");

define('MAIN_PATH', getcwd());

$MinMax = $bdd->query("SELECT MIN(id) AS First, MAX(id) AS Last FROM mycave"); // determine 1ere et derniere bouteille de mycave
$first_Last = $MinMax->fetch();
$first=$first_Last[0];                   // 1er enregistrement
$last=$first_Last[1];                    // dernier enregistrement

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);
$bottle = filter_input(INPUT_GET, 'bottle', FILTER_SANITIZE_NUMBER_INT);

$page = ($page > 0) ? $page : 0;            // quelle page afficher
$bottle = ($bottle > 0) ? $bottle : $first; // ou quelle bouteille si smartphone
$nb_elt = 10;                               // nb enregistrements par pages

$req = $bdd->query("SELECT id, name FROM mycave ORDER BY id");    // pour le <select> du smartphone
$ListName=$req->fetchAll(PDO::FETCH_ASSOC);
$optNames = array_column($ListName, 'name', 'id');

if(!(isset($_GET['direction']))){       // si grand écran
  $req = $bdd->query("SELECT * FROM mycave ORDER BY id LIMIT ". $page*$nb_elt ."," . $nb_elt);
  $elements=array();
  while ($donnees = $req->fetch()) {
    $elements[]=$donnees;              // tableau de (nb_elt) bouteilles
  }
}elseif($_GET['direction']=='left'){  // *********************    si smartphone
  if($bottle !== $first){
    $req = $bdd->query("SELECT * FROM mycave WHERE id < ". $bottle ." ORDER BY id DESC LIMIT 1");
  }else{
    $req = $bdd->query("SELECT * FROM mycave WHERE id = ". $first);
  }
  $donnees = $req->fetch();
  $bottle = $donnees[0];
  $elements[]=$donnees;
  $_GET['direction']=NULL;
}elseif($_GET['direction']=='right'){
  if($bottle !== $last){
    $req = $bdd->query("SELECT * FROM mycave WHERE id > ". $bottle ." ORDER BY id LIMIT 1");
  }else{
    $req = $bdd->query("SELECT * FROM mycave WHERE id = ". $last);
  }
  $donnees = $req->fetch();
  $bottle = $donnees[0];
  $elements[]=$donnees;
  $_GET['direction']=NULL;
}else{
  $req = $bdd->query("SELECT * FROM mycave WHERE id = ". $bottle);
  $donnees = $req->fetch();
  $bottle = $donnees[0];
  $elements[]=$donnees;
  $_GET['direction']=NULL;
}
$_SESSION['page'] = $page;    // page en cours pour retour de update, delete ...
$req = $bdd->query("SELECT COUNT(*) AS nb_rec FROM mycave"); // calcul nb enregistrements
$donnees = $req->fetch();
$nb_pages = ceil($donnees[0]/$nb_elt);      // calcul nb pages

$smarty = new Smarty();                 // nouvel objet smarty et recup des variable php dans smarty
$smarty->setTemplateDir('./template');
$smarty->assign('nb_rec',$donnees[0]);      // nombre de lignes dans mycave
$smarty->assign('nb_pages',$nb_pages);      // nombre de pages
$smarty->assign('page',$page);              // page courrente
$smarty->assign('elts',$elements);          // les enregistrements de mycave
$smarty->assign('bottle',$bottle);          // bouteille en cours
$smarty->assign('session',$_SESSION);
$smarty->assign('myOptions', $optNames);

$smarty->display('index.tpl');              // appelle la page principale
