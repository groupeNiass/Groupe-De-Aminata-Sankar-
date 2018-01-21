<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
		<script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
		
    </head>
<body>
<div class="bg-info" style="height: 970px;text-align: center;padding-top: 50px;">
<h1 style="color: gray">Bienvenue dans notre agence de location :Portail Articles</h1>
                <img src="Capture du 2018-01-06 13-11-45.png" alt="" >
                <ul  style="list-style-type: none;display:flex;margin-left: 70px">
        <li><a href="Accueil.php">Accueil</a></li>
        <li><a href="formBien.php">Enregistrer vos biens mobiliéres</a></li>
        <li><a href="tableBien.php">Les Mobiliers disponibles</a></li>
        
    </ul>

          <div>             
                <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top:20px;">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active" style="margin-top:-40px"></li>
                        <li data-target="#demo" data-slide-to="1" style="margin-top:-40px"></li>
                        <li data-target="#demo" data-slide-to="2" style="margin-top:-40px"></li>
                    </ul>
    
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="01.jpg" class=img-responsive alt="Los Angeles">
                <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="submit" name="connect" value="Connectez Vous"></a></footer>
            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="02.jpg" class=img-responsive alt="Chicago">
                            <div id="san"></div>
                <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="submit" name="connect" value="Connectez Vous"></a></footer>
            </div>
     
                        </div>
                        <div class="carousel-item">
                            <img src="03.jpg" class=img-responsive alt="New York">
                            <div id="san"></div>
                <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="button" name="connect" value="Connectez Vous"></a></footer>
            </div>
                        </div>
                    </div>
    
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
    
                </div>
                </div>
                
                    <div class="bg-info" style="padding-bottom:50px">
                <form class="form-group col-12 col-sm-4" action="#" method="post" style="margin-left:700px;margin-top:-230px;">
                        <h3>Rechercher un proprietaire de bien</h3>
                        <label for="services">Le type :</label>
            <select class="form-group custom-select form-control" style="margin-left: 24px;width: 510px; height: 35px;border-radius:0px" name="NomProp"  required="required">
                            <option value="" >Séléctionner le type de l'article</option>
                        <?php
                        include 'connexion.php';
                        $ligne0 = $bdd->query('SELECT * FROM Propriétaires');
                        while ($donnee0 = $ligne0->fetch())
                        {
                        ?>
                            <option value="<?php echo $donnee0['IdProp'];?>"> <?php echo $donnee0['NomProp'];?> </option>
                        <?php
                        }
                        ?>
                        </select>
                        <br/>
                        <input name="Bien"  class="btn btn-dark" type="submit" value="Rechercher">
                    </form>
                   
                    <form class="form-group col-12 col-sm-4" action="#" method="post" style="margin-top:200px;">
                        <h3>Rechercher un etat de bien</h3>
                        <label for="services">Le type :</label>
            <select class="form-group custom-select form-control" style="margin-left: 24px;width: 510px; height: 35px;border-radius:0px" name="Etat"  required="required">
                            <option value="" >Séléctionner le type de l'article</option>
                        <?php
                        include 'connexion.php';
                        $ligne0 = $bdd->query('SELECT Etat FROM Biens');
                        while ($donnee0 = $ligne0->fetch())
                        {
                        ?>
                            <option value="<?php echo $donnee0['Etat'];?>"> <?php echo $donnee0['Etat'];?> </option>
                        <?php
                        }
                        ?>
                        </select>
                        <br/>
                        <input name="etat"  class="btn btn-dark" type="submit" value="Rechercher">
                    </form>
                    </div>
                    </div>
                   


    
</div>
</body>
<style>
#fin {
    width: 776px;
    height: 40px;
    background: rgb(73, 70, 70);
    opacity: 0.6;
    -ms-filter: "alpha(opacity=10)";
    margin-top: -40px;
    margin-left: 206px;
             }
.bg-info li {
        margin-left: 15px;
        border: 2px solid grey;
        width: 350px;
        text-align: center;
        padding-top: 20px;
        height: 60px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
        margin-top: 10px;
    }
   .bg-info li:hover {
        background: grey;
        border: 2px solid pink;
    }
    a {
        text-decoration: none;
        color: white;
    }
</style>
</html>
<?php

 if(isset($_POST['etat']))
 {
     extract($_POST);
     include 'SpaceName.php';
$yp = new location\dao\Biens();
$ligne1 = $yp->listeEtat();
$yp->Etat = $Etat;
 

     ?>
                     <div class="bg-info" style="padding-bottom:50px">

     <h4>Les articles liés :</h4>
                                <table border="2" style="width: 100%; margin-bottom: 10px;">
                                    <tr  style="background: grey;height: 35px">
                                    <th>Etat</th>

                                    <th>Nom Bien</th>
            <th>Addresse</th>
            <th>Price</th>

            <th>Commission</th>
                                    </tr>
                                    <?php
                                          //$donn = $Biens->listeBien();
                                
                                    while ($row = $ligne1->fetch())            //Affichage de manière des champs du table service dans une tabe html
                                    {
                                        if($row['Etat']==$Etat)
                                        {
                                                ?>
                                                <tr>
                                                <th><?php echo $row['Etat']?></th>

                                                <th><?php echo $row['NomBien']?></th>
                <th><?php echo $row['Addresse']?></th>
                <th><?php echo $row['Price']?></th>
                <th><?php echo $row['Commission']?></th>
                                                </tr>
                                                <?php
                                               
                                            }
                                           
                                        }
                                   
                                   
                                ?>
                                </table>
                                </div>
                                <?php
 }

?>
 <?php
/*include 'SpaceName.php';
$p = new location\dao\Biens();
//$ligne1 = $yp->listeBYtype();
$ligne = $p->listeBYprop();
 if(isset($_POST['Bien']))
 {
     extract($_POST);
     $p->NomProp = $NomProp;


     ?>
                     <div class="bg-info" style="padding-bottom:50px">

     <h4>Les articles liés :</h4>
                                <table border="2" style="width: 100%; margin-bottom: 10px;">
                                    <tr  style="background: grey;height: 35px">
                                    <th>Nom propriétaire</th>

                                    <th>Nom Bien</th>
            <th>Addresse</th>
            <th>Price</th>

            <th>Commission</th>
                                    </tr>
                                    <?php
                                          //$donn = $Biens->listeBien();
                                
                                    while ($row = $ligne->fetch())            //Affichage de manière des champs du table service dans une tabe html
                                    {
                                        if($row['IdProp']==$NomProp)
                                        {
                                                ?>
                                                <tr>
                                                <th><?php echo $row['NomProp']?></th>

                                                <th><?php echo $row['NomBien']?></th>
                <th><?php echo $row['Addresse']?></th>
                <th><?php echo $row['Price']?></th>
                <th><?php echo $row['Commission']?></th>
                                                </tr>
                                                <?php
                                                $verif=true;
                                            }
                                            else
                                            {
                                                $verif=false;
                                            }
                                        }
                                   
                                   
                                ?>
                                </table>
                                </div>
                                <?php
 }
*/
 
?>
