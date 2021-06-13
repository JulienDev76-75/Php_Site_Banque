<?php
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
        <button type="submit" class="btn btn-dark text-white w-25 form-control" name="connexion">Connexion</button> 
    </div>

</form>


<?php
include "layout/footer.php";
?>