<?php
namespace Portfolio\Utilisateur
{
    abstract class Utilisateur
    {
        protected $mail = "@";
        
        public function seConnecter($sql)
        {
            //TODO
        }
        
        function contacter()
        {
            //TODO
        }
    }
}

namespace Portfolio\Admin

{
    class Admin
    {
        private $idUtilisateur = -1;
        private $nom = "";
        private $prenom = "";
        private $login = "";
        private $motdepasse = "";
        
        function __construct($nom, $prenom, $login, $motdepasse){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->login = $login;
            $this->motdepasse = $motdepasse;
        }

        public function getIdUtilisateur()
        {
            return $this->idUtilisateur;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function getLogin()
        {
            return $this->login;
        }

        public function getMotDePasse()
        {
            return $this->motdepasse;
        }

        public function setIdUtilisateur($idUtilisateur)
        {
            $this->idUtilisateur = $idUtilisateur;

        }
    
        public function setNom($nom)
        {
            $this->nom = $nom;

        }

        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;

        }

        public function setLogin($login)
        {
            $this->login = $login;

        }

        public function setMotDePasse($motdepasse)
        {
            $this->motdepasse = $motdepasse;

        }
    
        function seDeconnecter()
        {
            //TODO
        }
        function __toString()
        {
            $rep = "<div classe=\"ADmin\">$this->idUtilisateur $this->nom $this->prenom $this->login $this->motdepasse</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }
    }

}

namespace Portfolio\Ppe
{
    class Ppe
    {
        private $id = -1;
        private $nomProjet = "";
        private $description = "";
       
        
        function __construct($nom, $description)
        {
            $this->nomProjet = $nom;
            $this->description = $description;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getNomProjet()
        {
            return $this->nomProjet;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function setId($id)
        {
            $this->id = $id;
            return $this;
        }

        public function setNomProjet($nomProjet)
        {
            $this->nomProjet = $nomProjet;
            return $this;
        }

        public function setDescription($description)
        {
            $this->description = $description;
            return $this;
            
        }
        function __toString()
        {
            $rep = "<div classe=\"Ppe\">$this->id $this->nomProjet $this->description</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }

    }
}

namespace Portfolio\Document
{
    class Document
    {
        private $idDoc = -1;
        private $titre = "";
        private $description = "";
        private $url = "";
        
        function __construct($titre,$description)
        {
            $this->titre = $titre;
            $this->description = $description;
        }

        public function getIdDoc()
        {
            return $this->idDoc;
        }
    
        public function getTitre()
        {
            return $this->titre;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getUrl()
        {
            return $this->url;
        }

        public function setIdDoc($idDoc)
        {
            $this->idDoc = $idDoc;

        }

        public function setTitre($titre)
        {
            $this->titre = $titre;

        }

        public function setDescription($description)
        {
            $this->description = $description;

        }

        public function setUrl($url)
        {
            $this->url = $url;

        }
        function __toString()
        {
            $rep = "<div classe=\"Document\">$this->idDoc $this->titre $this->description $this->url</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }
    
    }
}

namespace Portfolio\Preuve
{
    class Preuve
    {
        private $idPreuve = -1;
        private $element = "";
        private $idDoc = -1;
        
        function __construct($element, $idDoc)
        {
            $this->element = $element;
            $this->idDoc = $idDoc;
        }
        
        
//         function modifierCouleur()
//         {
//             //TODO
//         }

        public function getIdPreuve()
        {
            return $this->idPreuve;
        }

        public function getValide()
        {
            return $this->valide;
        }

        public function getElement()
        {
            return $this->element;
        }

        public function getIdDoc()
        {
            return $this->idDoc;
        }

        public function setIdPreuve($idPreuve)
        {
            $this->idPreuve = $idPreuve;

        }

        public function setValide($valide)
        {
            $this->valide = $valide;

        }

        public function setElement($element)
        {
            $this->element = $element;

        }

        public function setIdDoc($idDoc)
        {
            $this->idDoc = $idDoc;

        }
        function __toString()
        {
            $rep = "<div classe=\"Preuve\">$this->idPreuve $this->valide $this->element $this->idDoc</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }
    }
}

namespace Portfolio\Competence
{
    class Competence
    {
        private $idCompetence = "-";
        private $description = "";
        private $idact = "";
        private $idPreuve = "";
        

        function __construct($idCompetece,$idAct,$description,$idPreuve)
        {
            $this->idCompetence = $idCompetece;
            $this->idact = $idAct;
            $this->description = $description;
            $this->idPreuve = $idPreuve;
        }
        

        public function getIdPreuve()
        {
            return $this->idPreuve;
        }


        public function getIdact()
        {
            return $this->idact;
        }


        public function getIdCompetence()
        {
            return $this->idCompetence;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function setIdCompetence($idCompetence)
        {
            $this->idCompetence = $idCompetence;
        }
        
        public function setIdact($idact)
        {
            $this->idact = $idact;
        }

        
        public function setDescription($description)
        {
            $this->description = $description;
        }
        public function setIdPreuve($idPreuve)
        {
            $this->idPreuve = $idPreuve;
        }
        
        function __toString()
        {
            $rep = "<div classe=\"Competence\">$this->idCompetence $this->idact $this->description $this->idPreuve</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }

    }
}

namespace Portfolio\Activite
{
    class Activite
    {
        private $idAct = "";
        private $idDomAct = "";
        private $titre = "";
        private $validee = FALSE;
        
        function __construct($idAct,$idDomAct,$titre)
        {
            $this->idAct = $idAct;
            $this->idDomAct = $idDomAct;
            $this->titre = $titre;
            $this->validee = $validee;
        }
        

        public function getIdDomAct()
        {
            return $this->idDomAct;
        }

    
        public function getIdAct()
        {
            return $this->idAct;
        }

        public function getTitre()
        {
            return $this->titre;
        }

        public function getValidee()
        {
            return $this->validee;
        }
    

        public function setIdAct($idAct)
        {
            $this->idAct = $idAct;
        }

        public function setTitre($titre)
        {
            $this->titre = $titre;
        }
    

        public function setValidee()
        {
            if (verifier($this)){
                $this->validee = TRUE;
                }
            
        }
        public function setIdDomAct($idDomAct)
        {
            $this->idDomAct = $idDomAct;
        }
    
        function __toString()
        {
            $rep = "<div classe=\"Acitivite\">$this->idAct $this->idDomAct $this->titre $this->validee</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }
        private function verifier($objet) {
            $sql = "SELECT * FROM COMPETENCE WHERE idAct = 'this->$idAct'";
            $validAct = TRUE;
            if ($row = $result->fetch_row()){
                do {
                    if ($row [2] == NULL) {
                     $validAct = FALSE;
                    }
                
             }   while ($row = $result->fetch_row() || $validAct == FALSE);
             }
            $result->close();
            return $validAct;
        }
        
    }
}
namespace Portfolio\DomaineActivite
{
    
    class DomaineActivite
    {
        private $idDomAct = "";
        private $titre = "";
        
        function __construct($idDomAct,$titre)
        {
            $this->idDomAct = $idDomAct;
            $this->titre = $titre;
        }

        public function getIdDomAct()
        {
            return $this->idDomAct;
        }

        public function getTitre()
        {
            return $this->titre;
        }

        public function setIdDomAct($idDomAct)
        {
            $this->idDomAct = $idDomAct;

        }

        public function setTitre($titre)
        {
            $this->titre = $titre;

        }
    
        function __toString()
        {
            $rep = "<div classe=\"DomaineActivite\">$this->idDomAct $this->titre</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }
    }
    
}