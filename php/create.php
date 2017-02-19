<?php
session_start();
require 'connect.php';

define("UPLOAD_DIR", "../img/");

if (!empty($_FILES["picture"])) {
    $picture = $_FILES["picture"];

    if ($picture["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }

    // verify the file type
    $fileType = exif_imagetype($_FILES["picture"]["tmp_name"]);
    $allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
    if (!in_array($fileType, $allowed)) {
        echo "<p>File type is not permitted.</p>";
        exit;
    }

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $picture["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

    // preserve file from temporary directory
    $success = move_uploaded_file($picture["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) { 
        echo "<p>Unable to save file.</p>";
        exit;
    }

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
}

$_POST['picture']=$_FILES['picture']['name'];
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])){
    $req = $bdd->prepare("INSERT INTO mycave( name, year, grapes, country, region, description, picture) VALUES (?,?,?,?,?,?,?)");
    $req->execute(array($_POST['name'],$_POST['year'],$_POST['grapes'],$_POST['country'],$_POST['region'],$_POST['description'],$_POST['picture']));
    $msg='Enregistrement ajouté';
    header('Location: ../index.php?msg='.$msg);
}
header('Location: ../index.php?page='.$_SESSION['page']);