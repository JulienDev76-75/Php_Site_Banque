<?php
    require "model/accounts.php";
    include "layout/header.php";

    $accounts = get_accounts();
    // On vérifie la validité des données transmises par url
    // On vérifie que le paramètre existe et corresponde à quelque chose dans le tableau
    if(isset($_GET["index"]) && isset($accounts[$_GET["index"]])) {
        $account = $accounts[$_GET["index"]];
    }
    // Autrement on génère un message d'erreur
    else {
        $error = "Nous ne parvenons pas à récupérer votre compte, essayez de revenir plus tard :-(";
    }
?>
<!-- On condition l'affichage selon qu'une erreur a été trouvée ou non -->
<?php if(isset($account)): ?>
    <h2><?php echo $account["name"] ?></h2>
<?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
        <p>Pourquoi ne pas retourner à l'accueil ?</p>
        <a href="index.php" class="btn btn-dark text-white">Accueil</a>
    </div>
<?php endif ?>

<?php
    include "layout/footer.php";
?>