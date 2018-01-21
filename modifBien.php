
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>

        <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js' integrity='sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh' crossorigin='anonymous'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js' integrity='sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ' crossorigin='anonymous'></script>
</head>
<body>
    <div style='background: blue; height: 900px;margin-top:-5px;color: white;padding-bottom:50px'>
    <img src='logo.png' alt='' >
    <ul style='list-style-type: none;display:flex;'>
    <li><a href='Accueil.php'>Accueil</a></li>

        <li><a href='formBien.php'>Nouveau Biens</a></li>
        <li><a href='tableBien.php'>Les Biens déjà disponibles</a></li>
    </ul>
    <form class='form-inline' action='#' method='post' style='margin-left: 200px'>

    <?php
                            include 'connexion.php';
                            $reponse = $bdd->query('SELECT * FROM Biens, Propriétaires,TypeBien WHERE Biens.IdProp = Propriétaires.IdProp && Biens.IdType = TypeBien.IdType && IdBien='.$_GET['IdBien']);
//('SELECT * FROM Biens, Propriétaires,TypeBien WHERE,Biens.IdProp = Propriétaires.IdProp && Biens.IdType = TypeBien.IdType && IdBien='.$_GET['IdBien']); // C'est pas secure, à toi de protéger ta variable
while ($donnees = $reponse->fetch()){
echo "

<h1 style='margin-left: 350px'>Easy Article Registration</h1>
        <fieldset style='width: 700px'>
            <legend>Ajouter des biens</legend>
            <label for=''>Nom du bien :</label>
            <input type='text' class='form-control' name='NomBien' style='margin-left: 45px' required='required' placeholder=".$donnees['NomBien']."><br/>
            <label for=''>Addresse :</label>
            <input type='text' class='form-control' name='Addresse' style='margin-left: 74px' required='required' placeholder=".$donnees['Addresse']."><br/>
            <label for=''>Price :</label>
            <input type='text' class='form-control' name='Price' style='margin-left: 105px' required='required' placeholder=".$donnees['Price']."><br/>
            <label for=''>Commmission :</label>
            <input type='text' class='form-control' name='Commission' style='margin-left: 35px' required='required' placeholder=".$donnees['Commission']."><br/>
            <input type='hidden' name='id_livre' value=".$donnees['IdBien']."/>
            ";
            ?>
            
            <label for=''>Le Type du bien :</label>
            <select class='form-group custom-select form-control' style='margin-left: 24px;width: 510px; height: 35px;border-radius:0px' name='IdType' required='required' >
            <option value="" >Séléctionner le type de l'article</option>
            <?php
        //include 'connexion.php';
        $ligne0 = $bdd->query('SELECT Nom, IdType FROM TypeBien');
        while ($donnee0 = $ligne0->fetch())
        {
        ?>
            <option value="<?php echo $donnee0['IdType'];?>"> <?php echo $donnee0['Nom'];?> </option>
        <?php
        }
        ?>
        </select><br/><br/>   
                        <label for=''>Etat du bien :</label> 
                        <select class="form-group custom-select form-control" style="margin-left: 38px;width: 510px; height: 35px;border-radius:0px" name="Etat" required="required">
                        <option value="" >Séléctionner l'Etat de l'article</option>
                    <?php
                    include 'connexion.php';
                    $ligne0 = $bdd->query('SELECT Etat FROM Biens');
                    while ($donnee0 = $ligne0->fetch())
                    {
                    ?>
                        <option value="<?php echo $donnee0['Etat'];?>"> <?php echo $donnee0['Etat'];?> </option>
                    <?php
                    }
                }
                    ?>
                    </select><br/><br/>
                        <small><a href='#'>Le type ne figure pas sur la liste</a></small>
            <input type='submit' value='Enregistrer' name='Enregistrer' class='btn btn-primary'>
        </fieldset>
    </form>	 	 	 	 	 	 
    </div>
</body>
<style>
    li {
       
        border: 2px solid grey;
        width: 350px;
        text-align: center;
        padding-top: 20px;
        height: 40px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
        margin-top: 10px;
    }
    li:hover {
        background: grey;
        border: 2px solid pink;
    }
    a {
        text-decoration: none;
        color: white;
    }
.form-control {
    width: 500px;
    height: 30px;
    border-radius: 0px;
    border: 2px solid grey;
    margin-top: 20px;
}
.btn {
    float: right;
    background: white;
    border: 2px solid white;
    color:  blue;
    height: 30px;
}
</style>
</html>
<?php

include 'SpaceName.php';
include 'connexion.php';
$Bien = new location\dao\Biens();
$Prop = new location\dao\Proprietaires();
if(isset($_POST['Enregistrer']))
                {
                    extract($_POST);
                   // $Bien->IdBien = $IdBien;
                    $Bien->NomBien = $NomBien;
    $Bien->Addresse = $Addresse;
    //$Bien->Password = $Password;
    $Bien->Price = $Price;
    $Bien->Commission = $Commission;
    $Bien->Etat = $Etat;
    $Bien->IdType = $IdType;
    $Prop->NumeroPiece = $NumeroPiece;
    $Prop->NomProp = $NomProp;
    $Prop->CellPhone = $CellPhone ;
    $ligneTest = $bdd->query('SELECT * FROM Propriétaires WHERE  NumeroPiece = "'.$NumeroPiece.'" ');
$exist=true;                        //verifier si le nouveau employé existe dans notre base de donnée
if($donneeTest = $ligneTest->fetch())
{
    $exist=true;
                        //Ce nom existe dans notre base de donnée
}
else
{
    $exist=false;
    $Prop->addProprietaire();
    //Ce nom n'éxiste pas dans notre base de donnée
}



if($exist==true)                    // Si le nouveau nom existe dans notre base de donnnée alors execute tout les lignes qui sont dans le if
{
    echo "<h6 style='width: 800px; margin: auto; border-bottom: 1px solid black;'>Un utilisateur nommé <span>".$donneeTest['NomProp']."</span> existe dans notre base de donnée avec <span>le même login</span> que vous nous avez renseigner !</h6>";
}
if ($exist==false) {
    $Bien->modifBien();
    echo 'Bienvenue'.$NomBien.'<br/>'.$Addresse;
                }
/*include 'connexion.php';
include 'SpaceName.php';
$Bien = new location\dao\Biens();
if(isset($_POST['Enregistrer']))
                {
                    extract($_POST);
                    $Bien->IdBien = $IdBien;
                    $Bien->NomBien = $NomBien;
    $Bien->Addresse = $Addresse;
    //$Bien->Password = $Password;
    $Bien->Price = $Price;
    $Bien->Commission = $Commission;
    $Bien->Etat = $Etat;
    $Bien->IdType = $IdType;
    $dat=('UPDATE Biens SET NomBien=''.$NomBien.'' ,Addresse=''.$Addresse.'',Price=''.$Price.'',Commission=''.$Commission.'',Etat=.''.$Etat.'',IdType=''.$IdType.'' from Biens where IdBien=''.$IdBien.''');
    $Bien->modifBien();
                }
                ?>*/
            }
?>