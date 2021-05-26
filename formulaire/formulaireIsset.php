<?php
    include "layout/header.php";
    // On vérifie la soumission d'un formulaire
    // Les données de formulaires sont envoyées dans POST
    // Les données du formulaires doivent toujours être vérifiées pour des questions de sécurités
    if(!empty($_POST)) {
        $account = $_POST;
        // Ici pour chaque entrée on se protège contre le faille XSS
        foreach($account as $key => $value) {
            $account[$key] = htmlspecialchars($value);
        }
        // Ensuite démarre un long travaille de vérification propre à chaque input qui permettrait de générer un message d'erreur
        // Cette variable erreur pourrait éventuellement servir de condition d'affichage
        if(empty($account["name"])) {
            $error = "Veuillez rentrer un nom de compte";
        }
        if(empty($account["amount"]) || !is_int($account["amount"])) {
            $error = "Veuillez rentrer un montant valide";
        }
    }
?>

<div class="row">
    <aside class="col-12 col-md-4">
        <h2>Créer un compte</h2>
        <!-- Notre formulaire qui contient toujous une methode et une action -->
        <form action="" method="post">
            <!-- Chaque input comporte toujours un name qui devient la clef dans la superglobale POST -->
            <input name="name" class="form-control my-2" type="text">
            <input name="amount" class="form-control my-2" type="number">
            <input name="addAccount" class="form-control btn btn-dark text-white my-2" type="submit" value="Envoyer">
        </form>
    </aside>
    <section class="col-12 col-md-8">
        <h3>Vos informations</h3>
        <?php if(isset($account)): ?>
            <ul class="list-group my-3">
                <li class="list-group-item"><?php echo $account["name"] ?></li>
                <li class="list-group-item"><?php echo $account["amount"] ?></li>
            </ul>
        <?php endif; ?>
    </section>
</div>

<?php
    include "layout/footer.php";
?>