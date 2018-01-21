<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>id</th> </br>

        <th>nom complet</th>C

        <th>login</th> </br>

        <th>password</th> </br> 

        <th>etat</th> </br>

        <th>profil</th> </br>
    </tr>
    <?php
        include 'prop.php';
        use location\dao\utilisateur;
        $prop = new utilisateur();
        $data = $prop->allutilisateur();
        while($row = $data->fetch()){
    ?>
            <tr>
                <th><?php echo $row['id']?></th>
                <th><?php echo $row['Nom complet']?></th>
                <th><?php echo $row['login']?></th>
                <th><?php echo $row['password']?></th>
                <th><?php echo $row['etat']?></th>
                <th><?php echo $row['profil']?></th>
            </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>