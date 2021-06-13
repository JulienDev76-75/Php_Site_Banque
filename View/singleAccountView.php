<?php

include "layout/header.php";
?>

<?php if(isset($account)): ?>
        <h2>Détails de votre compte : <?php echo $account["account_name"]; ?></h2>                    
        <a class="btn btn-dark text-white px-5" href="operation.php?index=<?php echo $account["id"];?>">Quelle opération voulez-vous faire ? </a>
        <p><?php echo $account["account_number"];?></p>
        <p><?php echo $account["amount_account"];?></p>
        <p><?php echo $account["firstname"];?></p>
        <p><?php echo $account["lastname"];?></p>

    <?php else : ?>
        <div class="alert alert-primary text-center pt-5" role="alert">
        <h2> <?php echo $error; ?></h2>
        <p class="text-center"> Une erreur est survenue, veuillez vous revenir sur la page : <br /><br /> <a href="index.php" class="btn btn-dark text-white">Accueil</a>
        </div>
    <?php endif ?>


<?php
include "layout/footer.php";
?>