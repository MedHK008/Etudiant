<?php
try{
    $bdd = new PDO ("mysql:host=localhost;dbname=db_etuds","root","");
}
catch(PDOException $e)
{
    echo"Votre connexion n'est pas reussie !!";
} 