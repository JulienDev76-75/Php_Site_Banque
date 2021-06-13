<?php

require "model/connexion.php";
require "model/operationModel.php";
require "model/accountModel.php";

$account = getSingleAccount($db, $_GET["index"]);
$amount = $account["amount"];
if (!empty($_POST)) {
    if(!empty($_POST["amount"]) > 0 ){
        addCredit($db);
        $total = $amount + $_POST["amount"]; // merci Grafikart
        updateAccount($db, $total, $_GET["index"]);
        }           
        elseif(!empty($_POST["amount"]) < 0 ) {
            addDebit($db); 
            $total = $amount + $_POST["amount"];
            updateAccount($db, $total, $account["index"]);
        }           
        if(!empty($_POST["amount"] === 0 )) {
            $error = "Veuillez fixer un montant supérieur ou inférieur a 0";  
        }   
}

    require "view/operationView.php";
 ?>