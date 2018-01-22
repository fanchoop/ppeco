<?php
namespace DAO
{

    include ("../metier/Portfolio.php");

    abstract class DAO
    {

        abstract function read($id);

        abstract function update($objet);

        abstract function delete($objet);

        abstract function create($objet);

        protected $key;

        protected $table;

        function __construct($key, $table)
        {
            $this->key = $key;
            $this->table = $table;
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }

        function getLastKey()
        {
            $sql = "SELECT MAX($this->key) as max FROM $this->table";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            $num = $row["max"];
            return $num;
        }
    }
}
namespace DAO\Preuve
{

    class PreuveDAO extends \DAO\DAO
    {

        function __construct()
        {
            parent::__construct("idPreuve", "preuve");
        }

        public function read($id)
        {
            $sql = "SELECT * FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $row = $stmt->fetch();
            $num = $row["idPreuve"];
            $nom = $row["element"];
            $idDoc = $row["idDoc"];
            $rep = new \Portfolio\Preuve\Preuve($nom,$idDoc);
            $rep->setidPreuve($num);
            return $rep;
        }

        public function update($objet)
        {
            $sql = "UPDATE $this->table SET element=:elem,idDoc=:idDoc WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idPreuve = $objet->getidPreuve();
            $nomElem = $objet->getElement();
            $idDoc = $objet->getIdDoc();
            $stmt->bindParam(':id', $idPreuve);
            $stmt->bindParam(':elem', $nomElem);
            $stmt->bindParam('idDoc', $idDoc);
            $stmt->execute();
        }

        public function create($objet)
        {
            $sql = "INSERT INTO $this->table  (element,idDoc) VALUES (:elem,:idDoc);";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $element = $objet->getElement();
            $idDoc = $objet->getIdDoc();
            $stmt->bindParam(':elem', $element);
            $stmt->bindParam(':idDoc', $idDoc);
            $stmt->execute();
            $id = $this->getLastKey();
            $objet->setidPreuve($id);
        }

        public function delete($objet)
        {
            $sql = "DELETE FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idPreuve = $objet->getidPreuve();
            $stmt->bindParam(':id', $idPreuve);
            $stmt->execute();
        }
    }
}
namespace DAO\Competence

{

    class CompetenceDAO extends \DAO\DAO
    {

        function __construct()
        {
            parent::__construct("idCompetence", "competence");
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }

        public function read($id)
        {
            $sql = "SELECT * FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $row = $stmt->fetch();
            $idCompetence = $row["idcompetence"];
            $description = $row["description"];
            $rep = new \Portfolio\Competence\Competence($description);
            $rep->setidCompetence($idCompetence);
            return $rep;
        }

        public function update($objet)
        {
            $sql = "UPDATE $this->table SET description=:description WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idCompetence = $objet->getidCompetence();
            $idAct = $objet->getIdAct();
            $description = $objet->getDescription();
            $stmt->bindParam(':id', $idCompetence);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }

        public function create($objet)
        {
            $sql = "INSERT INTO $this->table  (description) VALUES (:desc);";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $description = $objet->getDescription();
            $stmt->bindParam(':desc', $description);
            $stmt->execute();
            $id = $this->getLastKey();
            $objet->setIdCompetence($id);
        }

        public function delete($objet)
        {
            $sql = "DELETE FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idCompetence = $objet->getIdCompetence();
            $stmt->bindParam(':id', $idCompetence);
            $stmt->execute();
        }
    }
}
namespace DAO\Ppe
{

    class PpeDAO extends \DAO\DAO
    {

        function __construct()
        {
            parent::__construct("idPpe", "ppe");
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }

        public function read($id)
        {
            $sql = "SELECT * FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $row = $stmt->fetch();
            $idPpe = $row["idPpe"];
            $idUtilisateur = $row["idUtilisateur"];
            $nom = $row["nomProjet"];
            $description = $row["description"];
            $rep = new \Portfolio\Ppe\Ppe($idUtilisateur, $nom, $description);
            $rep->setidPpe($idPpe);
            return $rep;
        }

        public function update($objet)
        {
            $sql = "UPDATE $this->table SET idUtilisateur=:idUtilisateur,nomProjet=:nom,description=:description WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idUtilisateur = $objet->getIdUtilisateur();
            $nomProjet = $objet->getNomProjet();
            $description = $objet->getDescription();
            $stmt->bindParam(':id', $idPpe);
            $stmt->bindParam(':idUtilisateur', $idUtilisateur);
            $stmt->bindParam(':nomProjet', $nomProjet);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }

        public function create($objet)
        {
            $sql = "INSERT INTO $this->table  (idUtilisateur,nomProjet,description) VALUES (:idAct,:nom,:description);";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idUtilisateur = $objet->getIdUtilisateur();
            $nomProjet = $objet->getNomProjet();
            $description = $objet->getDescription();
            $stmt->bindParam(':idUtilisateur', $idUtilisateur);
            $stmt->bindParam(':nom', $dnomProjet);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
            $id = $this->getLastKey();
            $objet->setIdPpe($id);
        }

        public function delete($objet)
        {
            $sql = "DELETE FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idPpe = $objet->getIdPpe();
            $stmt->bindParam(':id', $idPpe);
            $stmt->execute();
        }
    }
}
namespace DAO\Activite
{
    
    class ActiviteDAO extends \DAO\DAO
    {
        
        function __construct()
        {
            parent::__construct("idAct", "activite");
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }
        public function read($id)
        {
            $sql = "SELECT * FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $row = $stmt->fetch();
            $idAct = $row["idAct"];
            $idCompetence = $row["idcompetence"];
            $titre = $row["titre"];
            $rep = new \Portfolio\Activite\Activite($idUtilisateur, $idCompetence, $titre);
            $rep->setIdAct($idAct);
            return $rep;
        }
    
        public function update($objet)
        {
            $sql = "UPDATE $this->table SET idcompetence=:idcompetence,titre=:titre WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idCompetence = $objet->getIdCompetence();
            $titre = $objet->getTitre();
            $stmt->bindParam(':id', $idAct);
            $stmt->bindParam(':idcompetence', $idCompetence);
            $stmt->bindParam(':titre', $titre);
            $stmt->execute();
        }
    
        public function create($objet)
        {
            $sql = "INSERT INTO $this->table  (idCompetence,titre) VALUES (:idcompetence,:titre);";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idCompetence = $objet->getIdCompetence();
            $titre = $objet->getTitre();
            $stmt->bindParam(':idcompetence', $idCompetence);
            $stmt->bindParam(':titre', $titre);
            $stmt->execute();
            $id = $this->getLastKey();
            $objet->setIdAct($id);
        }
    
        public function delete($objet)
        {
            $sql = "DELETE FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idAct = $objet->getIdAct();
            $stmt->bindParam(':id', $idAct);
            $stmt->execute();
        }
    
        
    }
}
namespace DAO\Document
{
    
    class DocumentDAO extends \DAO\DAO
    {
        
        function __construct()
        {
            parent::__construct("idDocument", "document");
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }
        public function read($id)
        {
            $sql = "SELECT * FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $row = $stmt->fetch();
            $idDoc = $row["idDocument"];
            $titre = $row["titre"];
            $description = $row["description"];
            $rep = new \Portfolio\Document\Document($titre, $description);
            $rep->setIdDoc($idDoc);
            return $rep;
        }
    
        public function update($objet)
        {
            $sql = "UPDATE $this->table SET titre=:titre,description=:description WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $description = $objet->getDescription();
            $titre = $objet->getTitre();
            $stmt->bindParam(':id', $idDoc);
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }
    
        public function create($objet)
        {
            $sql = "INSERT INTO $this->table  (titre,description) VALUES (:titre,:description);";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $titre = $objet->getTitre();
            $description = $objet->getDescription();
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
            $id = $this->getLastKey();
            $objet->setIdDoc($id);
        }
    
        public function delete($objet)
        {
        $sql = "DELETE FROM $this->table WHERE $this->key=:id";
        $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
        $idDoc = $objet->getIDDoc();
        $stmt->bindParam(':id', $idDoc);
        $stmt->execute();}
    
    }
}
namespace DAO\DomaineActivite
{
    
    class DomaineActiviteDAO extends \DAO\DAO
    {
        
        function __construct()
        {
            parent::__construct("idDomAct", "domaineactivite");
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }
        public function read($id)
        {
            $sql = "SELECT * FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $row = $stmt->fetch();
            $idDomAct = $row["idDomAct"];
            $idAct = $row["idAct"];
            $titre = $row["titre"];
            $description = $row["description"];
            //$rep = new \Portfolio\DomaineActivite\DomaineActivite($idAct,$titre, $description);
            $rep->setIdDomAct($idDomAct);
            return $rep;
        }
        
        public function update($objet)
        {
            $sql = "UPDATE $this->table SET idAct=:idAct,titre=:titre,description=:description WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idAct = $objet->getIdAct();
            $description = $objet->getDescription();
            $titre = $objet->getTitre();
            $stmt->bindParam(':id', $idDomAct);
            $stmt->bindParam(':idAct', $idAct);
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }
        
        public function create($objet)
        {
            $sql = "INSERT INTO $this->table  (idAct,titre,description) VALUES (:idAct,:titre,:description);";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idAct = $objet->getIdAct();
            $titre = $objet->getTitre();
            $description = $objet->getDescription();
            $stmt->bindParam(':idAct', $idAct);
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
            $id = $this->getLastKey();
            $objet->setIdDomAct($idDomAct);
        }
        
        public function delete($objet)
        {
            $sql = "DELETE FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idDomAct = $objet->getIDDoc();
            $stmt->bindParam(':id',$idDomAct);
            $stmt->execute();}
            
    }
}
namespace DAO\Admin
{
    
    class AdminDAO extends \DAO\DAO
    {
        
        function __construct()
        {
            parent::__construct("idutilisateur", "ADMIN");
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }
        public function read($id)
        {
            $sql = "SELECT * FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $row = $stmt->fetch();
            $idUtilisateur = $row["idutilisateur"];
            $nom = $row["nom"];
            $prenom = $row["prenom"];
            $login = $row["login"];
            $motDePasse = $row["motdepasse"];
            $rep = new \Portfolio\Admin\Admin($nom,$prenom,$login,$motDePasse);
            $rep->setIdUtilisateur($idUtilisateur);
            return $rep;
        }
        
        public function update($objet)
        {
            $sql = "UPDATE $this->table SET nom=:nom,prenom=:prenom,login=:login,motdepasse=:motdepasse WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idUtilisateur = $objet->getIdUtilisateur();
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $login = $objet->getLogin();
            $motDePasse = $objet->getMotDePasse();
            $stmt->bindParam(':id', $idUtilisateur);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':motdepasse', $motDePasse);
            $stmt->execute();
        }
        
        public function create($objet)
        {
            $sql = "INSERT INTO $this->table (nom,prenom,login,motdepasse) VALUES (:nom,:prenom,:login,:motdepasse);";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $login = $objet->getLogin();
            $motDePasse = $objet->getMotDePasse();
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':motdepasse', $motDePasse);
            $stmt->execute();
            $id = $this->getLastKey();
            $objet->setIdUtilisateur($id);
        }
        
        public function delete($objet)
        {
            $sql = "DELETE FROM $this->table WHERE $this->key=:id";
            $stmt = \DB\Connexion\Connexion::getInstance()->prepare($sql);
            $idUtilisateur = $objet->getIdUtilisateur();
            $stmt->bindParam(':id', $idUtilisateur);
            $stmt->execute();}
            
    }
}
?>
