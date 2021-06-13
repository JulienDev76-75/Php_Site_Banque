<?php require "layout/header.php"; ?>

<div class="container-fluid mx-auto">
<!-- rappel : $user = $_POST -->
    <section class="row text-center my-4 mx-auto p-5">

        <div class="col-12 col-md-6 p-5">
            <h2>Pour créer un compte :</h2>
            <form action="newCustomer.php" method="post">
                <select class="form-select m-4 p-3" for="account_type" name="account_type">
                    <option selected value="PER">PER</option>
                    <option value="LivretA">Livret A</option>
                    <option value="PEL">PEL</option>
                </select>
                <input name="email" class="form-control m-4 p-3" type="email" placeholder="veuillez rentrer votre email">
                <input name="motdepasse" class="form-control m-4 p-3" type="text" placeholder="veuillez rentrer votre mot de passe">
                <!-- si la regex n'est pas validée, veuillez rentrer un email correct / le MDP doit comprendre une maj, un caractère special, et 8 lettres -> REGEX à faire -->
                <input name="phone" class="form-control m-4 p-2" type="text" placeholder="veuillez rentrer un numéro de téléphone">
                <input name="city" class="form-control m-4 p-2" type="text" placeholder="veuillez rentrer votre ville">
                <input name="postal_code" class="form-control m-4 p-2" type="text" placeholder="veuillez rentrer votre code postal">
                <input name="profession" class="form-control m-4 p-2" type="text" placeholder="veuillez rentrer votre profession">
                <input name="validation" class="form-control btn btn-dark m-4 p-3" type="submit" value="Envoyer">
            </form>
        </div>

    </section>

</div>

<?php 
    require "layout/footer.php"; 
?>