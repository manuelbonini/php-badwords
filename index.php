<?php
    // PHP
    $stringa = "omino nano non anonimo";
    $lunghezza_stringa = strlen($stringa);

    $badword = $_GET['badword'];
    $stringa_censurata = str_replace($badword, "***", $stringa);
?>

<p>Testo originale: <?php echo $stringa; ?>. Ed è lungo: <?php echo $lunghezza_stringa; ?></p>

<p>Testo censurato: <?php echo $stringa_censurata; ?></p>