<?php
require("resultatrecherche.php");
$stmt = $bdd->query("SELECT * from etudiant where filiere = '$fil'");
$lignes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Student</title>
        <link rel="stylesheet" href="style.css">
        <script src="main.js" async></script>
    </head>
    <body>

        <h1>Recherche un étudiant </h1>

        <form method="post">

            <label for="fil">Filière:</label>
            <input type="text" id="fil" name="fil">
            <input type="submit" value="Submit">
        </form>
        
        <div id="divrech">
            <h1>Recherche des étudiants </h1>
        </div>
        <table>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>filière</th>
                    <th>note cc</th>
                    <th>note exam</th>
                    <th>Moyenne</th>
                </tr>
                <div id="results" hidden>
                    <?php 
                        foreach ($lignes as $ligne)
                        {
                        $moy=($ligne['controle']+$ligne['examen']*2)/3;
                        echo "<tr> <td>$ligne[id]</td> <td>$ligne[nom]</td><td>$ligne[filiere]</td><td>$ligne[controle]</td><td>$ligne[examen]</td><td>$moy</td></tr>" ;
                        }
                    ?>
                </div>
        </table>

    </body>
</html>