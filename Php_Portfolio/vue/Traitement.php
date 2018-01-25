<?php
// Hachage du mot de passe
include ("../db/Connexion.php");
include ("../db/Daos.php");


$message='';
if (empty($_POST['pseudo']) || empty($_POST['pass']) ) //Oublie d'un champ
{
    $message = '<p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
}
else //On check le mot de passe
{
    $query = "SELECT * FROM ADMIN WHERE login = :pseudo ";
    $stmt = \DB\Connexion\Connexion::getInstance()->prepare($query);
    
    $stmt->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
    $stmt->execute();
    $data=$stmt->fetch();
    $mdp = $data["motDePasse"];
    $pass_hache = hash('sha256', $_POST['pass']);
    echo "$pass_hache";
    if (strcmp($mdp ,$pass_hache)== 0)
    {
        session_start();
        $_SESSION['pseudo'] = $data['login'];
        $_SESSION['id'] = $data['idAdmin'];
        $_SESSION['nom'] = $data['nom'];
        $_SESSION['prenom'] = $data['prenom'];
        $message = '<p>Bienvenue '.$data['login'].',
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="./accueil.php">ici</a>
			pour revenir à la page d accueil</p>';
    }
    else // Acces pas OK !
    {
        $message = '<p> Une erreur est Apparue , le mot de passe et/ou le login sont incorrect  Cliquez <a href="./accueil.php">ici</a>
	    pour revenir à la page d accueil</p>';
    }
    $stmt->CloseCursor();
}
echo $message.'</div></body></html>';


?>