<?php
include "layout/header.php";

if (!empty($_POST)) {
    $account = $_POST;
}
?>

<div class="row">
    <aside class="col-12 col-md-4">
        <h2>Créer un compte</h2>
        <form action="" method="post" >
            <input name="name" class="form-control my-2" type="text">
            <input name="amount" class="form-control my-2" type="number">
            <input name="addAccount" class="form-control btn btn-dark text-white my-2" type="submit" value="Envoyer">
        </form>
    </aside>
    <section class="col-12 col-md-8">
        <h2>Tes informations Pedro</h2>
        <?php if(isset($account)): ?>
            <ul class="list-group my-2">
                <li class="list-group-item"><?php echo $account["name"] ?></li>
                <li class="list-group-item"><?php echo $account["amount"] ?></li>
        <?php endif; ?>
    </section>
</div>

<?php
include "layout/footer.php";
?>