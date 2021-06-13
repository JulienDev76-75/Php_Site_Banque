<?php
include "layout/header.php";

if (!empty($_POST)) {
    $account = $_POST;
}
?>

<div class="row">
    <aside class="col-12 col-md-4">
        <h2>Créer un compte</h2>
        <form action="addAccount.php" method="post" >
            <input name="name" class="form-control my-2" type="text">
            <input name="amount" class="form-control my-2" type="number">
            <input name="addAccount" class="form-control btn btn-dark text-white my-2" type="submit" value="Envoyer">
        </form>
    </aside>
    <section class="col-12 col-md-8">
        <h2>Vos informations</h2>
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

<?php
require "model/connexion.php";
require "model/accountModel.php";
session_start();
$account = $_POST;

if(!empty($_POST)) {
  if(!isset($_POST["amount_account"]) || $_POST["amount"] > 0 )
  {
    $error = "<div class='alert alert-danger text-center' role='alert'><h2>Montant minimum 30 euros</h2></div>";
  }     
  
  else 
  {
    $result = addAccount($db);
    if($result) {
      $success = "<div class='alert alert-secondary text-center' role='alert'><h2>Votre compte a bien été créé</h2></div>";
     }  else {
      $error = "<div class='alert alert-danger text-center' role='alert'><h2>Nous n'avons pas réussi a créer le compte</h2></div> ";
     }
  } 
};

if(!empty($_POST) && (!isset($_POST)) {

    foreach($account as $key => $value) {
        $account[$key] = htmlentities($value);
    }
    if(empty($account["name"])) {
        $error = "Veuillez rentrer un nom de compte";
    }
    if(empty($account["amount"]) || !is_int($account["amount"])) {
        $error = "Veuillez rentrer un montant valide";
    }
}

include "view/newAccountView.php";

<!-- $_FILES['accountCreate.php']['prénom'] 
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
 
}




