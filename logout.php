<?php
session_start();
if(isset($_SESSION["user"])) {
    // Vide et détruit toutes les informations en session, qu'il soit détruit côté client et côté serveur
    session_unset();
    // destruction totale, s'il manque un des deux la session ne sera jamais TOTALEMENT fermée
    session_destroy();
    // Redirige sur login
    header("Location: login.php");
    exit;
}
?>
