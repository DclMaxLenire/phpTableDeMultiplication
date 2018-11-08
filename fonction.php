<?php
        // Prend la valeur de la table choisis//
$tableSelection = $_GET['table'];
        // Vas chercher les deux dernière caractère de ma valeur //
$chiffre = substr($tableSelection, -2, 5);
        // Transforme cette valeur en chiffre rond, il supprime le 0//
$chiffreTable = intval($chiffre);
?>


<?php include 'index.php'; ?>


<?php

        // Crée le tableau et calcul //
    for ($j = 1; $j <= 30; $j++)
    {
        echo $chiffreTable.' x '.$j.' = '.$chiffreTable*$j.'<br>';
    }

?>

    