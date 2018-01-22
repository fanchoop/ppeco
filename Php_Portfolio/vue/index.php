<?php


//use Portfolio\Admin;
include ("../db/Connexion.php");
include ("../db/Daos.php");

/* $daoAd = new \DAO\Admin\AdminDAO();
$ad = new \Portfolio\Admin\Admin("Jean","bon","test","123456");
echo "$ad";
$daoAd->create($ad);
echo "$ad";

$vol = $daoAd->read(1);
echo "$vol";
$vol->setNom("Moco");
$daoAd->update($vol);
$daoAd->delete($vol);
echo "$vol";
$vol = $daoAd->read(1);
echo "$vol"; */

/* $daoPreuve = new \DAO\Preuve\PreuveDAO();
$preuve = new \Portfolio\Preuve\Preuve("test", 1);
$preuve = $daoPreuve->read(2);
echo "$preuve";
$preuve->setElement("loli");
$daoPreuve->update($preuve);
$preuve = $daoPreuve->read(2);


$daoPreuve->delete($preuve);
echo "$preuve"; */

$daoCompetence = new \DAO\Competence\CompetenceDAO();
$comp = new \Portfolio\Competence\Competence("test");
$daoCompetence->create($comp);
echo "$comp";

?>