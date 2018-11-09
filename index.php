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
            <input type="checkbox" name="selection[]" id="TableDe01" value="TableDe01" >Table de 1
            <input type="checkbox" name="selection[]" id="TableDe02" value="TableDe02" >Table de 2
            <input type="checkbox" name="selection[]" id="TableDe03" value="TableDe03" >Table de 3
            <input type="checkbox" name="selection[]" id="TableDe04" value="TableDe04" >Table de 4
            <input type="checkbox" name="selection[]" id="TableDe05" value="TableDe05" >Table de 5
            <input type="checkbox" name="selection[]" id="TableDe06" value="TableDe06" >Table de 6
            <input type="checkbox" name="selection[]" id="TableDe07" value="TableDe07" >Table de 7
            <input type="checkbox" name="selection[]" id="TableDe08" value="TableDe08" >Table de 8
            <input type="checkbox" name="selection[]" id="TableDe09" value="TableDe09" >Table de 9
            <input type="checkbox" name="selection[]" id="TableDe10" value="TableDe10" >Table de 10
            <input id="bouton" name="bouton" type="submit">
        </form>
            <!-- Affiche la table selectionné -->
        <div class="affichageTable">
            <!-- Affiche la table de 1 à 15 -->
        <div class="de1a15">
        <?php
                if ( isSet($_GET['bouton']) ) {
                    foreach($_GET['selection'] as $valeur){
        // Prend la valeur de la table choisis//
        // Vas chercher les deux dernière caractère de ma valeur //
$chiffre = substr($valeur, -2, 5);
        // Transforme cette valeur en chiffre rond, il supprime le 0//
$chiffreTable = intval($chiffre);
        // Crée le tableau et calcul //
    for ($j = 1; $j <= 15; $j++)
        {   
        $resultat = $chiffreTable*$j;
        echo "<p>$chiffreTable  x $j  =  $resultat <br></p>";
        }
    }
}
?>
        </div>
        <!-- Affiche la table de 16 à 30 -->
        <div class="de16a30">
        <?php
                if ( isSet($_GET['bouton']) ) {
                    foreach($_GET['selection'] as $valeur){
        // Prend la valeur de la table choisis//
$tableSelection = $_GET['selection'];
        // Vas chercher les deux dernière caractère de ma valeur //
$chiffre = substr($valeur, -2, 5);
        // Transforme cette valeur en chiffre rond, il supprime le 0//
$chiffreTable = intval($chiffre);
        // Crée le tableau et calcul //
    for ($j =16 ; $j <= 30; $j++)
        {   
        $resultat = $chiffreTable*$j;
        echo "<p>$chiffreTable x $j = $resultat <br></p>";
        } 
    } 
}
?>
    </div>
        </div>
    </section>
</body>
</html>