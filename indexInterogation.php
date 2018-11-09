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
        <h2>Choissisez la table pour l'interogation</h2>
        <form id="formulaire" method="GET" name="formulaire">
        <select name="table">
                <option>Choissisez la table </option>
                <option value="TableDe1">Table de 1 </option>
                <option value="TableDe2">Table de 2 </option>
                <option value="TableDe3"> Table de 3 </option>
                <option value="TableDe4"> Table de 4 </option>
                <option value="TableDe5">Table de 5</option>
                <option value="TableDe6">Table de 6  </option>
                <option value="TableDe7">Table de 7  </option>
                <option value="TableDe8">Table de 8 </option>
                <option value="TableDe9"> Table de 9 </option>
                <option value="TableDe01">Table de 1 </option>
                <option value="TableDe02">Table de 2 </option>
                <option value="TableDe03"> Table de 3 </option>
                <option value="TableDe04"> Table de 4 </option>
                <option value="TableDe05">Table de 5</option>
                <option value="TableDe06">Table de 6  </option>
                <option value="TableDe07">Table de 7  </option>
                <option value="TableDe08">Table de 8 </option>
                <option value="TableDe09"> Table de 9 </option>
                <option value="TableDe10"> Table de 10 </option>
            </select>
        </form>
        <input id="bouton" name="bouton" type="submit">
    </section>
        <div class="afficheInterogation">

    <?php 
        if ( isSet($_GET['bouton']) ) {
            echo 'Salut' ;
            echo "<input type=\"text\" name=\"txtpoints\" />";
            echo "<input type=\"submit\" value=\"valider\" />";
        }
    ?>




























</body>
</html>