<?php
namespace Portfolio\Utilisateur
{
    abstract class Utilisateur
    {
        protected $mail = "@";
        
        function seConnecter()
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
        
        /**
         * @return number
         */
        public function getIdUtilisateur()
        {
            return $this->idUtilisateur;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getNom()
        {
            return $this->nom;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getPrenom()
        {
            return $this->prenom;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getLogin()
        {
            return $this->login;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getMotDePasse()
        {
            return $this->motdepasse;
        }
    
        /**
         * @param number $id
         */
        public function setIdUtilisateur($idUtilisateur)
        {
            $this->idUtilisateur = $idUtilisateur;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $nom
         */
        public function setNom($nom)
        {
            $this->nom = $nom;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $prenom
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $login
         */
        public function setLogin($login)
        {
            $this->login = $login;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $motDePasse
         */
        public function setMotDePasse($motdepasse)
        {
            $this->motdepasse = $motdepasse;
            return $this;
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
        
        /**
         * @return number
         */
        public function getId()
        {
            return $this->id;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getNomProjet()
        {
            return $this->nomProjet;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getDescription()
        {
            return $this->description;
        }
    
        /**
         * @param number $id
         */
        public function setId($id)
        {
            $this->id = $id;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $nomProjet
         */
        public function setNomProjet($nomProjet)
        {
            $this->nomProjet = $nomProjet;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $description
         */
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
        
        function __construct($titre,$description,$url)
        {
            $this->titre = $titre;
            $this->description = $description;
            $this->url = $url;
        }
        /**
         * @return number
         */
        public function getIdDoc()
        {
            return $this->idDoc;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getTitre()
        {
            return $this->titre;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getDescription()
        {
            return $this->description;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getUrl()
        {
            return $this->url;
        }
    
        /**
         * @param number $idDoc
         */
        public function setIdDoc($idDoc)
        {
            $this->idDoc = $idDoc;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $titre
         */
        public function setTitre($titre)
        {
            $this->titre = $titre;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $url
         */
        public function setUrl($url)
        {
            $this->url = $url;
            return $this;
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
        private $valide = FALSE;
        private $element = "";
        private $idDoc = -1;
        
        function __construct($element, $idDoc)
        {
            $this->element = $element;
            $this->idDoc = $idDoc;
        }
        
        
        function modifierCouleur()
        {
            //TODO
        }
        /**
         * @return number
         */
        public function getIdPreuve()
        {
            return $this->idPreuve;
        }
    
        /**
         * @return Ambigous <boolean, unknown>
         */
        public function getValide()
        {
            return $this->valide;
        }
    
        /**
         * @return mixed
         */
        public function getElement()
        {
            return $this->element;
        }
    
        /**
         * @return Ambigous <number, unknown>
         */
        public function getIdDoc()
        {
            return $this->idDoc;
        }
    
        /**
         * @param number $idPreuve
         */
        public function setIdPreuve($idPreuve)
        {
            $this->idPreuve = $idPreuve;
            return $this;
        }
    
        /**
         * @param Ambigous <boolean, unknown> $valide
         */
        public function setValide($valide)
        {
            $this->valide = $valide;
            return $this;
        }
    
        /**
         * @param mixed $element
         */
        public function setElement($element)
        {
            $this->element = $element;
            return $this;
        }
    
        /**
         * @param Ambigous <number, unknown> $idDoc
         */
        public function setIdDoc($idDoc)
        {
            $this->idDoc = $idDoc;
            return $this;
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
        private $idCompetence = -1;
        private $description = "";
        
        function __construct($description)
        {
            $this->description = $description;
        }
        
        /**
         * @return number
         */
        public function getIdCompetence()
        {
            return $this->idCompetence;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getDescription()
        {
            return $this->description;
        }
    
        /**
         * @param number $idCompetence
         */
        public function setIdCompetence($idCompetence)
        {
            $this->idCompetence = $idCompetence;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
            return $this;
        }
        
        function __toString()
        {
            $rep = "<div classe=\"Competence\">$this->idCompetence $this->description</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }

    }
}

namespace Portfolio\Activite
{
    class Activite
    {
        private $idAct = -1;
        private $idCompetence = -1;
        private $titre = "";
        private $activite = -1;
        private $validee = FALSE;
        
        function __construct($idCompetence,$titre, $activite, $validee)
        {
            $this->idCompetence = $idCompetence;
            $this->titre = $titre;
            $this->activite = $activite;
            $this->validee = $validee;
        }
        
        
        /**
         * @return number
         */
        public function getIdAct()
        {
            return $this->idAct;
        }
    
        /**
         * @return Ambigous <number, unknown>
         */
        public function getIdCompetence()
        {
            return $this->idCompetence;
        }
    
        /**
         * @return Ambigous <string, unknown>
         */
        public function getTitre()
        {
            return $this->titre;
        }
    
        /**
         * @return Ambigous <number, unknown>
         */
        public function getActivite()
        {
            return $this->activite;
        }
    
        /**
         * @return Ambigous <boolean, unknown>
         */
        public function getValidee()
        {
            return $this->validee;
        }
    
        /**
         * @param number $idAct
         */
        public function setIdAct($idAct)
        {
            $this->idAct = $idAct;
            return $this;
        }
    
        /**
         * @param Ambigous <number, unknown> $idCompetence
         */
        public function setIdCompetence($idCompetence)
        {
            $this->idCompetence = $idCompetence;
            return $this;
        }
    
        /**
         * @param Ambigous <string, unknown> $titre
         */
        public function setTitre($titre)
        {
            $this->titre = $titre;
            return $this;
        }
    
        /**
         * @param Ambigous <number, unknown> $activite
         */
        public function setActivite($activite)
        {
            $this->activite = $activite;
            return $this;
        }
    
        /**
         * @param Ambigous <boolean, unknown> $validee
         */
        public function setValidee($validee)
        {
            $this->validee = $validee;
            return $this;
        }
    
        function __toString()
        {
            $rep = "<div classe=\"Acitivite\">$this->idAct $this->idCompetence $this->titre $this->validee</div>";
            // $rep = "<img width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
            return $rep;
        }
    }
}