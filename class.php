<?php
namespace location\dao;
    use\PDO;
class proprietaire{
    var $id;
    var $numPiece;
    var $nomProp;    
    var $tel;
    private $bdd;

    private function getConnexion(){
        try{
            if($this->bdd == null){
                $this->bdd = new PDO('mysql:host=;dbname=BDLocation;charset=utf8', 'root', 'adama78',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            }       
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

    function addproprietaire()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "INSERT INTO Proprietaires 
                  VALUES(null, :NumeroPiece, :NomProp, :CellPhone)";
        // preparation de la requete
       $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(
            array('NumeroPiece'=>$this->numPiece,
                  'NomProp'=>$this->nomProp,
                  'CellPhone'=>$this->tel
       ));
        return $data;
    }

    function findproprietaire()
    {
        $this->getConnexion();
       $sql="select * from Proprietaires where NumeroPiece=''";
       $donnees = $this->bdd->query($sql);
       return $donnees;
   
     
    }

    function updateproprietaire()
    {
        $this->getConnexion();
        // requete a executer
       $sql= "select * from Proprietaires where CellPhone=''";
        // preparation de la requete
        $donnees = $this->bdd->query($sql);
        return $donnees;
    }
    function listerproprietaire()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "select * from Proprietaires";
        // preparation de la requete
        $donnees = $this->bdd->query($sql);
        return $donnees;
    }



}
class bien
{
public $id;
public $nomBien;
public $adresse;
public $montantLocation;
public $commission;
public $idtype;
public $idProprietaire;
public $etatBien;
private $bdd;
private function getConnexion(){
try{
if($this->bdd == null){
$this->bdd =new PDO('mysql:host=;dbname=BDLocation;charset=utf8', 'root', 'adama78',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
}
}
catch(Exception $e){
die('Erreur : ' . $e->getMessage());
}
}

function addBien(){

$this->getConnexion();

// requete a executer
$sql = "INSERT INTO bien 
VALUES(null, :nomBien, :adresse, :montantLocation, :commission,idtypebien,idproprietaire,:etatBien)";
// preparation de la requete
$req = $this->bdd->prepare($sql);
//execution de la requete
$data = $req->execute(
array(
'nomBien'=>$this->nomBien,
'adresse'=>$this->adresse,
'montantLocation'=>$this->montantLocation,
'commission'=>$this->commission,
'idtypebien'=>$this->$idtype,
'idproprietaire'=>$this->$idProprietaire,
'etatBien'=>$this->etatBien


));
/*  if ($exist==0) {
Proprietaire::addProprietaire($numPiece);
$sql = "INSERT INTO BIen 
VALUES(null, :nomBien, :adresse, :montantLocation, :commission, NULL, NULL,:etatBien)";
// preparation de la requete
$req = $this->bdd->prepare($sql);
//execution de la requete
$data = $req->execute(
array(
'nomBien'=>$this->nomBien,
'adresse'=>$this->adresse,
'montantLocation'=>$this->montantLocation,
'commission'=>$this->commission,
'idTypebien'=>$this->idTypebien,
'idProprietaire'=>$this->idProprietaire,
'etatBien'=>$this->etatBien


));

}*/
return $data;

}
function listeBien()
{
$this->getConnexion();
// requete a executer
$sql = "select * from bien";
// preparation de la requete
$donnees = $this->bdd->query($sql);
return $donnees;
}
function updateProprietaire()
{
require 'upadatebien.php';
extract($_POST);
$this->getConnexion();
//requete a executer
    $sql = "UPDATE Proprietaire SET tel= :tel, nomBIen= :nomBien, tel= :tel tel= :tel WHERE numPiece='$numPiece'";
            // preparation de la requete
$donne=$this->bdd->prepare($sql);
        // execute la requete
       $donnees=$donne->execute(array(
            'tel'=>$this->tel)
        );        
}

}
class TypeBien
{
public $id;
public $nomtype;
private $bdd;
private function getConnexion(){
try{
if($this->bdd == null){
$this->bdd =new PDO('mysql:host=;dbname=BDlocation;charset=utf8', 'root', 'adama78',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
}
}
catch(Exception $e){
die('Erreur : ' . $e->getMessage());
}
}

function addTypeBien(){

$this->getConnexion();
// requete a executer
$sql = "INSERT INTO typeBien 
VALUES(null, :nomtype)";
// preparation de la requete
$req = $this->bdd->prepare($sql);
//execution de la requete
$data = $req->execute(
array(
'nomtype'=>$this->nomtype,


));
/*  if ($exist==0) {
Proprietaire::addProprietaire($numPiece);
$sql = "INSERT INTO BIen 
VALUES(null, :nomBien, :adresse, :montantLocation, :commission, NULL, NULL,:etatBien)";
// preparation de la requete
$req = $this->bdd->prepare($sql);
//execution de la requete
$data = $req->execute(
array(
'nomBien'=>$this->nomBien,
'adresse'=>$this->adresse,
'montantLocation'=>$this->montantLocation,
'commission'=>$this->commission,
'idTypebien'=>$this->idTypebien,
'idProprietaire'=>$this->idProprietaire,
'etatBien'=>$this->etatBien


));

}*/
return $data;

}
function listeBien()
{
$this->getConnexion();
// requete a executer
$sql = "select * from bien";
// preparation de la requete
$donnees = $this->bdd->query($sql);
return $donnees;
}
function updateProprietaire()
{
require 'upadatebien.php';
extract($_POST);
$this->getConnexion();
//requete a executer
    $sql = "UPDATE Proprietaire SET tel= :tel, nomBIen= :nomBien, tel= :tel tel= :tel WHERE numPiece='$numPiece'";
            // preparation de la requete
$donne=$this->bdd->prepare($sql);
        // execute la requete
       $donnees=$donne->execute(array(
            'tel'=>$this->tel)
        );        
}

}

class Utilisateur{

    public $nom;
    public $login;
    public $profil;
    private $password;
    private $bdd;

    private function getConnexion(){
        try{
            if($this->bdd == null){
                $this->bdd = new PDO('mysql:host=;dbname=BDlocation;charset=utf8', 'root', 'adama78',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            }       
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

    function addUtilisateur()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "insert into Utilisateur 
                  values(null, :nom, :login, :profil, :password)";
        // preparation de la requete
        $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(
            array('nom'=>$this->nom,
                  'login'=>$this->login,
                  'profil'=>$this->profil,
                  'password'=>$this->password
        ));
        return $data;
    }

}
?>
