<?php

namespace location\dao;
use PDO;
class Biens
        {
            var $IdBien;
            var $Etat;
            var $Addresse;
            var $Price;
            var $Commission;
            private $bdd;
           // IdBien 	Etat 	Addresse 	Price 	Commission 	IdType 	IdProp 
           private function getConnexion(){
            try{
                if($this->bdd == null){
                    $this->bdd = new PDO('mysql:host=;dbname=BdLocation;charset=utf8', 'root', 'Minetou&É',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                }
            }
            catch(Exception $e){
                die('Erreur : ' . $e->getMessage());
            }
        }
    
            public function addBiens()
            {
            
                $this->getConnexion();
                // requete a executer
               $sql = "insert into Biens(Etat,Addresse,Price,Commission,Etat,IdType,IdProp)
                          values(:Etat,:Addresse,:Price,:Commission,:Etat,:IdType,:IdProp )";
                // preparation de la requete
                $req = $this->bdd->prepare($sql);
                //execution de la requete
                $donn = $req->execute(
                    array(
                          'Etat'=>$this->Etat,
                          'Addresse'=>$this->Addresse,
                          'Price'=>$this->Price,
                          'Commission'=>$this->Commission,
                          'Etat'=>$this->Etat,
                          'IdType'=>$this->IdType,
                          'IdProp'=>$this->IdProp
                       ));
                return $donn;
              //  header('Location:Accueilbiens.php');
               // echo 'Helloadd world ! <br>';
            }
  /*'IdType'=>$this->IdType,
                          'IdProp'=>$this->IdProp*/

            function listeBien()
            {
                $this->getConnexion();
                $sl = 'SELECT * FROM Biens, Propriétaires,TypeBien WHERE Biens.IdProp = Propriétaires.IdProp && Biens.IdType = TypeBien.IdType';
                $onnes = $this->bdd->query($sl);
                return $onnes;
                /*$this->getConnexion();
                // requete a executer
               $sl = "select * from Biens";
                // preparation de la requete
                $donnes = $this->bdd->query($sl);
                return $donnes;
            }*/
        }
        function listeEtat(){
            $this->getConnexion();
            $sl = "select * from Biens";
                // preparation de la requete
                $onn = $this->bdd->query($sl);
                return $onn;
       
        }
        function listeBYtype(){
            $this->getConnexion();
                $sl = 'SELECT * FROM Biens,TypeBien WHERE Biens.IdType = TypeBien.IdType';
                $ones = $this->bdd->query($sl);
                return $ones;
        }
        function listeBYprop(){
            $this->getConnexion();
            $sl = 'SELECT * FROM Biens,Propriétaires WHERE Biens.IdProp = Propriétaires.IdProp';
            $donnes = $this->bdd->query($sl);
            return $donnes;
        }
        function modifBien(){
            $this->getConnexion();
//$dat="select * from Biens";
           
           // $onn = $this->bdd->query($dat);
          //  $sql = ('UPDATE `Biens` SET `NomBien` = '$NomBien',`Addresse` = '$Addresse',`Price` = '$Price',`Commission` = '$Commission',`IdType` = '$IdType',`Etat` = '$Etat' WHERE `IdBien` =''. $IdType.''');
            //       $donn = $this->bdd->query($sql);
      
             //   return $donn;
           

        }
    
    }
    class Proprietaires {
        var $IdProp;
        var $NumeroPiece;
        var $NomProp;
       var $CellPhone;
        private $bdd;
    
        private function getConnexion(){
            try{
                if($this->bdd == null){
                    $this->bdd = new PDO('mysql:host=;dbname=BdLocation;charset=utf8', 'root', 'Minetou&É',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
                }       
            }
            catch(Exception $e){
                die('Erreur : ' . $e->getMessage());
            }
        }
    
        function addProprietaire()
        {
            $this->getConnexion();
            // requete a executer
           $sql = "insert into Propriétaires 
                      values(null, :NumeroPiece, :NomProp, :CellPhone)";
            // preparation de la requete
            $req = $this->bdd->prepare($sql);
            //execution de la requete
            $data = $req->execute(
                array('NumeroPiece'=>$this->Numeropiece,
                      'NomProp'=>$this->NomProp,
                      'CellPhone'=>$this->CellPhone ));
             return $data;
        }
    
        function updateProprietaire()
        {
            $this->getConnexion();
            // requete a executer
           $sql = "select * from proprietaire";
            // preparation de la requete
            $donnees = $this->bdd->query($sql);
            return $donnees;
        }
    
        function listerProprietaire()
        {
            $this->getConnexion();
            // requete à executer
           $sql = "select * from proprietaire";
            // preparation de la requete
            $donnees = $this->bdd->query($sql);
            return $donnees;
        }
         
    }