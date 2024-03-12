
<?php
require("connect_DB.php");
$stmt = $bdd->query("SELECT * from etudiant");
$lignes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Student</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h1>ajout etud : </h1>

        <form action="insert_etud.php" method="post">

            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom">
            
            <label for="filiere">Filière:</label>
            <input type="text" id="filiere" name="filiere">
            
            <label for="controle">Note Contrôle:</label>
            <input type="text" id="controle" name="controle">
    
            <label for="examen">Note Examen:</label>
            <input type="text" id="examen" name="examen">
            
            <input type="submit" value="Submit">
        </form>

        <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>filière</th>
            <th>note cc</th>
            <th>note exam</th>
            <th>Moyenne</th>
        </tr>
        <?php 
            foreach ($lignes as $ligne)
            {
            $moy=($ligne['controle']+$ligne['examen']*2)/3;
            echo "<tr> <td>$ligne[id]</td> <td>$ligne[nom]</td><td>$ligne[filiere]</td><td>$ligne[controle]</td><td>$ligne[examen]</td><td>$moy</td></tr>" ;
            }
        ?>
        </table>

    </body>
</html>