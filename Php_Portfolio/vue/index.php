<?php


//use Portfolio\Admin;
include ("../db/Connexion.php");
include ("../db/Daos.php");
// $daoAd = new \DAO\Admin\AdminDAO();
// $ad = new \Portfolio\Admin\Admin("Jean","bon","test","123456");
// echo "$ad";                                                      //Le Create
// $daoAd->create($ad);
// echo "$ad";

// $ad = $daoAd->read(1);
// echo "$ad";
// $ad->setNom("Moco");
// $daoAd->update($ad);
// $daoAd->delete($ad);                                                    //Le update et Delete
// echo "$ad";
// $vol = $daoAd->read(1);
// echo "$ad";

$daoPreuve = new \DAO\Preuve\PreuveDAO();
$preuve = new \Portfolio\Preuve\Preuve("test", 1);                           //Le Create
$daoPreuve->create($preuve);
echo "$preuve";


// $preuve = $daoPreuve->read(2);
// echo "$preuve";
// $preuve->setElement("loli");                                                // Le Update et delete
// $daoPreuve->update($preuve);
// $preuve = $daoPreuve->read(4);
// echo "$preuve";
// $daoPreuve->delete($preuve);
// echo "$preuve";


//$daoAct = new \DAO\Activite\ActiviteDAO();
//$act = new \Portfolio\Activite\Activite("A0.0.0","D1.1","test");              //Le create
//$daoAct->create($act);
//echo "$act";

// $act = $daoAct->read("A0.0.0");
// echo "$act";                                                  //Le delete
// $daoAct->delete($act);

// $act = $daoAct->read("A1.1.1");
// $act->setTitre("test");
// $daoAct->update($act);                                            //Le update
// echo  "$act";


// $daodom = new  \DAO\DomaineActivite\DomaineActiviteDAO();
// $dom = new  \Portfolio\DomaineActivite\DomaineActivite("A1.2", "test");
// $daodom->create($dom);                                             //Le create
// echo "$dom";

// $dom = $daodom->read("A1.2");
// echo "$dom";                                                     //le Delete
// $daodom->delete($dom);


// $dom = $daodom->read("D1.1");
// $dom->setTitre("test");                                          // le Update
// $daodom->update($dom);
// echo "$dom";




// $daoCompetence = new \DAO\Competence\CompetenceDAO();
// $comp = new \Portfolio\Competence\Competence("D","A1.1.1","tortue");
// $daoCompetence->create($comp);                                               // Le create
// echo "$comp";

// $comp = $daoCompetence->read("D");
// $comp->setDescription("test");
// $daoCompetence->update($comp);                                               //Le Update
// echo "$comp";

// $comp = $daoCompetence->read("D");
// $daoCompetence->delete($comp);                                               //Le delete

//$daodoc = new \DAO\Document\DocumentDAO();
// $doc = new \Portfolio\Document\Document("Test", "test de create");
// echo "$doc";
// $daodoc->create($doc);
// echo "$doc";
// $doc = $daodoc->read(2);                                                       // Le Delete
// $daodoc->delete($doc);
?>