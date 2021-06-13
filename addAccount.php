<?php
require "model/accountModel.php";
require "model/connexion.php";
session_start();

    if(!empty($_POST)) {
        if(!isset($_POST["amount"]) || $_POST["amount"] < 0 && empty($_POST["account_type"]))
        {
            echo "<div class='alert alert-danger text-center' role='alert'><h2>Ajoutez un montant valide supérieur à 0 euro</h2></div>";
        }     
        else {
        $account = addAccount($db, $_POST);
        }
        if($result) 
        {
            echo "<div class='alert alert-secondary text-center' role='alert'><h2>Votre compte a bien été créé</h2></div>";
        }  
        else 
        {
            echo "<div class='alert alert-danger text-center' role='alert'><h2>Nous n'avons pas réussi a créer le compte</h2></div> ";
        }
    }

require "View/addAccountView.php";
?>





