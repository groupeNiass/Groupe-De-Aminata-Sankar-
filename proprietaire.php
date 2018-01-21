<?php
namespace location\dao;
        use\PDO;
include 'class.php';
$proprietaire = new proprietaire();
extract($_POST['valider']);
$proprietaire->numPiece = $_POST['numPiece'];
$proprietaire->nomProp = $_POST['nomProp'];
$proprietaire->tel = $_POST['tel'];
$proprietaire->addproprietaire();
header('location:form.php');
?>