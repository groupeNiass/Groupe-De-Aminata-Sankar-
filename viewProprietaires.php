<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <center>
   <h1>la liste des proprietaires</h1>
    <table border="2px solid ;">
    <tr>
        <!--<th>ID</th>-->
        <th>Numéro de pièce</th>
        <th>Nom & Prénom</th>
        <th>Téléphone</th>
        <th>Action</th>
    </tr>
    <?php
    
    use\PDO;
        include 'Proprietaire_class.php';
        $proprietaire = new proprietaire();
        $data = $proprietaire->findproprietaire();
        $data = $proprietaire->updateproprietaire(); 
        $data = $proprietaire->listerproprietaire();
        while($row = $data->fetch()){
    ?>
            <tr>
               <!--<th><?php echo $row['IdProp']?></th>-->
               <td><?php echo $row['NumeroPiece']?></td>
               <td><?php echo $row['NomProp']?></td>
               <td><?php echo $row['CellPhone']?></td>
               <td><button>Editer</button></td>
            </tr>
    <?php
        }
    ?>  
    </table></center>
</body>
</html>