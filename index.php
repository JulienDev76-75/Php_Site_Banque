<?php
//si l'user n'est PAS connecté, alors il est redirigé vers la page login.php
session_start();
if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

//On inclus le layer header avec Include ou Require afin de respecter le DRY
require "model/connexion.php";
require "model/accountModel.php";
require "model/customerModel.php";

//stock la fonction dans une variable afin de l'appeler, si l'appel à la BDD est correcte ($db) et si la Session de l'user correspond à l'id de l'user afin d'obtenir le bon compte
$accounts = getAccounts($db, $_SESSION["user"]["id"]);

require "view/indexView.php";
?>