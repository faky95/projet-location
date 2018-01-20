<?php
include 'Utilisateur_class.php';
$prop = new utilisateur();
extract($_POST);
$util->Numeropiece = $Numeropiece;
$util->nomcomplet = $numcomplet;
$util->Tel = $Tel;
$util->login = $login;
$util->password = $password;
$util->profil=$profil;
 
$prop->addutilisateur();
header('location:viewutilisateur.php');