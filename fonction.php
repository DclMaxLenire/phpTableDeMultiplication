<?php
$tableSelection = $_GET['table']; // Prend la valeur de la table choisis//
?>

<?php
 if ($tableSelection == "TableDe1"):// nous envoie sur la page de la table choisis //
    header('Location: tableDe1.php');
endif;
    ?>

    <?php
 if ($tableSelection == "TableDe2"):
    echo "TESSSSSSSSSSTEEEEEEEEEEEEEEEEEEEEEE 2";
endif;
    ?>