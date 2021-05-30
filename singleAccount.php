<?php

include "layout/header.php";
require "model/operationModel.php";
require "model/accountModel.php";
require "model/connexion.php";

$account = getSingleAccount($db, );
if(isset($_GET["index"]) && isset($accounts)) {
    $account = $accounts;     
} else {
    $error = "Nous ne parvenons pas à récupérer le compte, il n'existe peut être pas. ";     
}
?>

<?php if(isset($accounts)): ?>
    <?php foreach($accounts as $index => $account): ?>
        <h2>Votre compte :  <?php echo $account["account_type"]; ?></h2>
        <h3>Votre compte :  <?php echo $account["account_type"]; ?></h3>                         
        <a class="btn btn-dark text-white px-5" href="operation.php?index=<?php echo $account["id"];?>">Quelle opération voulez-vous faire ? </a>
    <?php endforeach ?>
    <?php else: ?>
        <div class="alert alert-secondary" role="alert">
        <h2> <?php echo $error; ?></h2>
        <p> essayez donc de revenir à <a href="index.php" class="btn btn-dark text-white">Accueil</a>
        </div>
    <?php endif ?>


<?php
include "layout/footer.php";
?>