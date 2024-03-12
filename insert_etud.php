<?php
require("connect_DB.php");

$nom = $_POST['nom'];
$filiere = $_POST['filiere'];
$controle = $_POST['controle'];
$examen = $_POST['examen'];

$sql = "INSERT INTO etudiant (nom, filiere, controle, examen) VALUES (:nom, :filiere, :controle, :examen)";

$stmt = $bdd->prepare($sql);

$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':filiere', $filiere);
$stmt->bindParam(':controle', $controle);
$stmt->bindParam(':examen', $examen);

$stmt->execute();

header('Location: insertion.php');
?>
