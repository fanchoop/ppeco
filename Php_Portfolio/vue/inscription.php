<?php
include ("../db/Connexion.php");
include ("../db/Daos.php");
?>

<?php 

// Vérification de la validité des informations
$nom = "bon";
$prenom = "jean";
$login = "theoolait";
$pass = "caca";

// Hachage du mot de passe

$pass_hache = hash('sha256', $pass);
//$pass_hache = password_hash("test", PASSWORD_DEFAULT);

// Insertion

$daoAdmin = new \DAO\Admin\AdminDAO();
$admin = new \Portfolio\Admin\Admin($nom, $prenom, $login, $pass_hache);
$daoAdmin->create($admin);