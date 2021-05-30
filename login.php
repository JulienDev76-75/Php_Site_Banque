<?php   
    require "model/connexion.php";
    require "model/customerModel.php";

    //si le champs email et mdp ont été remplis
    if (isset($_POST["mail"]) && isset($_POST["password"])) {
        $user = getCustomerByEmail($db, $_POST["mail"]);
        //si on a trouvé un user avec cet email
        if($user) {
            //on vérifie le mdp , si le mdp transmis par formulaire est === au mdp dans la bdd alors je la connecte
            if (password_verify($_POST["password"], $user["customer_password"])) {
                //On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer
                session_start();
                $_SESSION["user"] = $user;
                header("Location:index.php");
                exit;
            }
        }
    //si les identifiants ne sont pas bons
    else {
        $error_message = "Identifiants incorrects";
    }
}

    include "layout/header.php";
?>

<h2 class="text-center mt-5">accédez à mon espace</h2>  


<form action="" method="post" class="w-75 mx-auto my-5">

    <?php if(isset($error_message)) : ?>
        <div class="alert alert-danger">
        <?php echo $error_message; ?>
        </div>
    <?php endif; ?>

    <div>
        <label for="mail" class="form-label">Votre mail : </label>
        <input type="email" name="mail" id="email" class="form-control">
    </div>

    <div>
        <label for="password" class="form-label">Votre mot de passe : </label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div class="my-5 text-center">
        <button type="submit" class="btn btn-dark text-white w-25 form-control" name="connexion" >Connexion</button> 
    </div>

</form>

<?php
include "layout/footer.php";
?>