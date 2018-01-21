<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include 'Accueilbiens.php';
    ?>
    <div style="padding-bottom:50px;color:white" class="bg-info ">
    <h3 style="margin-left: 250px">Vous avez demander la liste des mobiliers ?</h3>
    <table border="2" style="width: 800px; margin-left: 200px;">
        <tr style="background: grey;height: 35px">
            <th>Nom Bien</th>
            <th>Addresse</th>
            <th>Price</th>

            <th>Commission</th>
            <th>Type du bien</th>
            <th>Propriétaire</th>
            <th>Modifier</th>

        </tr>
        <?php
        include 'SpaceName.php';
        $Biens = new location\dao\Biens();
        $reponse = $Biens->listeBien();
        while($donnees = $reponse->fetch()){
    ?>
            <tr>
                <th><?php echo $donnees['NomBien']?></th>
                <th><?php echo $donnees['Addresse']?></th>
                <th><?php echo $donnees['Price']?></th>
                <th><?php echo $donnees['Commission']?></th>
              <th><?php echo $donnees['Nom']?></th>
                <th><?php echo $donnees['NomProp']?></th>
                <th><a href="modifBien.php?IdBien='<?php echo $donnees['IdBien'];?>'">Modifier</a></th>

            </tr>
            <?php
        }
        ?>
    </table>
   
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     </body>
</html>