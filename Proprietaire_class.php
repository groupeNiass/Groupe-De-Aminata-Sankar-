    <?php

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
       $sql = "insert into Proprietaires
                  values(null, :NumeroPiece, :NomProp, :CellPhone)";
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


?>
