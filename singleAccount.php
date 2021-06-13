<?php

session_start();
if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

require "model/accountModel.php";
require "model/connexion.php";

if(isset($_GET["id"]) && !empty($_GET["id"])) {    
    $account = getSingleAccount($db, $_SESSION["user"]["id"], $_GET["id"]);
} 

else {
    $error = "Nous ne parvenons pas à récupérer le compte, veuillez recommencer plus tard";
}
require "view/singleAccountView.php";
?>