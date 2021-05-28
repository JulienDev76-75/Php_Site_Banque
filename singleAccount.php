<?php

include "layout/header.php";
require "model/account.php";

$account = get_accounts();
if(isset($_GET["index"]) && isset($account[$_GET["index"]])) {
    $accounts = $account[$_GET["index"]];

}
else {
    $error = "nous ne parvenons pas à récupérer votre compte, revenez plus tard";

}
?>

    <?php if(isset($accounts)): ?>
        <h2> <?php echo $accounts["name"] ?></h2>
    <?php else: ?>
        <div class="alert alert-secondary" role="alert">
        <h2> <?php echo $error; ?></h2>
        <p> essaye donc de revenir à <a href="index.php" class="btn btn-dark text-white">Accueil</a>
        </div>

    <?php endif ?>

<?php
include "layout/footer.php";
?>