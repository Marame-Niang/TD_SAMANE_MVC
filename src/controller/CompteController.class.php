<?php
use libs\system\Controller;
use \src\model\CompteRepository;
    class CompteController extends  Controller
    {
         public function __construct()
         {
             parent::__construct();
         }

         public function Compte()
         {
            $db = new CompteRepository();
             return $this->view->load("welcome/index");
         }

         public function insert()
         {
             extract($_POST);
             $db = new CompteRepository();
            //  var_dump($_POST);
            //  die;
             
            
            if(isset($_POST['submit'])){
                if ($choix_client == 'nouveau') {
                    if ($choix_type_client == 'physique') {
                        if ($choixcompte == 'simple') {
                            $client = new Client();
                            $matricule = codeAleatoire(8);
                            //var_dump($matricule);
                            $client-> setMat($matricule);
                            $client-> setCni($cni);
                            $client-> setNom($nom);
                            $client-> setPrenom($prenom);
                            $client-> setSexe($sexe);
                            $client-> setDatenaiss($datenaiss);
                            $client-> setTel($tel);
                            $client-> setAdresse($adr);
                            $client-> setEmail($email);
                            $cl =$db->addClient($client);
    
                            $cli = $db->getClient($cl);

                                // var_dump($cli);
                                // die();
    
                            $compte = new Compte();
                            $rib = cleRip(9);
                            $numero = cleRip(8);
                            $compte -> setNumero($numero);
                            $compte -> setRib($rib);
                            $compte -> setSolde(50000);
                            $compte -> setDateOuve(date('Y-m-d'));
                                // var_dump($compte);
                                // die();
                            $compte -> setFraisOuv(25000);
                            $compte -> setRemuneration(10000);
                            $type = $db->getTypeCompte(1);
                            $compte -> setTypeCompte($type);
                            $compte -> setId_Client($cli);
    
                            $cl =$db->addCompte($compte);
    
                        }
                        elseif ($choixcompte == 'courant') {
                            $client = new Client();
                            $matricule = codeAleatoire(8);
                            $client-> setMat($matricule);
                            $client->setCni($cni);
                            $client->setNom($nom);
                            $client->setPrenom($prenom);
                            $client->setSexe($sexe);
                            $client->setDatenaiss($datenaiss);
                            $client->setTel($tel);
                            $client->setAdresse($adr);
                            $client->setEmail($email);
                            $client->setRaison_sociale($raison_sociale);
                            $client->setSalaire($salaire);
                            $client->setEmpl($nom_employeur);
                            $client->setAdrEmpl($adr_employeur);
    
                            $cl =$db->addClient($client);
                            // var_dump($cl);
                            // die;
                            $cli = $db->getClient($cl);
    
                            $compte = new Compte();
                            $rib = cleRip(9);
                            $numero = cleRip(8);
                            $compte -> setNumero($numero);
                            $compte -> setRib($rib);
                            $compte -> setSolde(50000);
                            $compte -> setDateOuve(date('Y-m-d'));
                            $compte -> setAgios(10000);
                            $type = $db->getTypeCompte(2);
                            $compte -> setTypeCompte($type);
                            $compte -> setId_Client($cli);
    
                            $cl =$db->addCompte($compte);
                        }
                        else {
                            $client = new Client();
                            $matricule = codeAleatoire(8);
                            $client-> setMat($matricule);
                            $client->setCni($cni);
                            $client->setNom($nom);
                            $client->setPrenom($prenom);
                            $client->setSexe($sexe);
                            $client->setDatenaiss($datenaiss);
                            $client->setTel($tel);
                            $client->setAdresse($adr);
                            $client->setEmail($email);
    
                            $cl =$db->addClient($client);
                            $cli = $db->getClient($cl);
                            // var_dump($client);
    
    
                            $compte = new Compte();
                            $rib = cleRip(9);
                            $numero = cleRip(8);
                            $compte -> setNumero($numero);
                            $compte -> setRib($rib);
                            $compte -> setSolde(50000);
                            $compte -> setFraisOuv(25000);
                            $compte -> setRemuneration(10000);
                            $compte -> setDate_debut($date_debut);
                            $compte->setDateOuve(date('Y-m-d'));
                            $compte -> setDate_fin($date_fin);
                            $type = $db->getTypeCompte(3);
                            $compte -> setTypeCompte($type);
                            $compte -> setId_Client($cli);
    
                            $cl =$db->addCompte($compte);
                            // var_dump($compte);
                        }
                    }
                    else {
                        $entreprise = new Entreprise();
                        //$entreprise-> setId($id);
                        $entreprise-> setNom($nom_entreprise);
                        $entreprise-> setTel($tel_entreprise);
                        $entreprise-> setEmail($email_entreprise);
                        $entreprise-> setBudjet($budget_entreprise);
                        $entreprise-> setAdresse($adr_entreprise);
    
                        //$entreprisemodel = new M_Compte();
    
                        $cl = $db-> addEntreprise($entreprise);
                        $cli = $db->getEntreprise($cl);
    
                        if ($choixcompte == "simple") {
                            $compte = new Compte();
                            $rib = cleRip(9);
                            $numero = cleRip(8);
                            $compte -> setNumero($numero);
                            $compte -> setRib($rib);
                            $compte -> setSolde(50000);
                            $compte -> setDateOuve(date('Y-m-d'));
                            $compte -> setFraisOuv(25000);
                            $compte -> setRemuneration(10000);
                            $type = $db->getTypeCompte(1);
                            $compte -> setTypeCompte($type);
                            $compte -> setIdEntreprise($cli);
    
                            $cl =$db->addCompte($compte);
                        }
                        else {
                            $compte = new Compte();
                            $rib = cleRip(9);
                            $numero = codeAleatoire(8);
                            $compte -> setNumero($numero);
                            $compte -> setRib($rib);
                            $compte -> setSolde(50000);
                            $compte -> setFraisOuv(25000);
                            $compte -> setRemuneration(10000);
                            $compte -> setDate_debut($date_debut);
                            $compte->setDateOuve(date('Y-m-d'));
                            $compte -> setDate_fin($date_fin);
                            $type = $db->getTypeCompte(3);
                            $compte -> setTypeCompte($type);
                            $compte -> setIdEntreprise($cli);
    
                            $cl =$db->addCompte($compte);
                        }
                    }
                }
            }else{
                $this->view->load('welcome/index');
            }
             

         }

    
}
    function codeAleatoire($car)
    {
       $string = "";
       $chaine = "2643789ABDCEFGHJKMNPRTUVW";
       srand((double)microtime()*1000000);
       for($i=0; $i<$car; $i++)
       {
           $string .= $chaine[rand()%strlen($chaine)];
       }
       return $string;
    }

    function cleRip($rip)
    {
        $string = "";
        $chaine = "012643789";
        srand((double)microtime()*1000000);
        for($i=0; $i<$rip; $i++)
        {
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $string;
    }
?>