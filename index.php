<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Table de multiplication</title>
</head>
<body>
    <section>
        <h1>Table de multiplication</h1>
        <h2> Choissisez la table de multiplication et cliquez sur voir </h2>
        <form id="formulaire" method="GET" name="formulaire">
            <input type="checkbox" name="selection" id="TableDe01" value="TableDe01">Table de 1
            <input type="checkbox" name="selection" id="TableDe02" value="TableDe02">Table de 2
            <input type="checkbox" name="selection" id="TableDe0" value="TableDe03">Table de 3
            <input type="checkbox" name="selection" id="TableDe0" value="TableDe04">Table de 4
            <input type="checkbox" name="selection" id="TableDe0" value="TableDe05">Table de 5
            <input type="checkbox" name="selection" id="TableDe0" value="TableDe06" >Table de 6
            <input type="checkbox" name="selection" id="TableDe0" value="TableDe07" >Table de 7
            <input type="checkbox" name="selection" id="TableDe0" value="TableDe08">Table de 8
            <input type="checkbox" name="selection" id="TableDe0" value="TableDe09">Table de 9
            <input type="checkbox" name="selection" id="TableDe0" value="TableDe10">Table de 10
            <input id="bouton" name="bouton" type="submit">
        </form>
        <div class="affichageDesTables">
        <!-- Affiche la table selectionn" -->
        <?php
                if ( isSet($_GET['bouton']) ) {
        // Prend la valeur de la table choisis//
$tableSelection = $_GET['selection'];
        // Vas chercher les deux dernière caractère de ma valeur //
$chiffre = substr($tableSelection, -2, 5);
        // Transforme cette valeur en chiffre rond, il supprime le 0//
$chiffreTable = intval($chiffre);
        // Crée le tableau et calcul //
    for ($j = 1; $j <= 15; $j++)
        {   
        $resultat = $chiffreTable*$j;
        echo "<p>$chiffreTable  x $j  =  $resultat <br></p>";
        }
    for ($j =16 ; $j <= 30; $j++)
        {   
        $resultat = $chiffreTable*$j;
        echo "<p>$chiffreTable x $j = $resultat <br></p>";
        } 
    }  
?>
        </div>
    </section>
</body>
</html>