<?php 
 require "layout/header.php";
 ?> 

<div class="container w-75 mx-auto">

<h3 class="mb-5 mt-5 text-center">Ajouter un compte</h3>
<!-- si le compte existe deja -> message erreur A FAIRE -->
<form action="addAccount.php" method="post">
  <div class="mb-3">
    <select class="form-select" for="account_type" name="account_type">
      <option selected value="PER">PER</option>
      <option value="Livret A">Livret A</option>
      <option value="PEL">PEL</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="amount-account" class="form-label">Montant à mettre sur le compte</label>
    <input type="number" class="form-control" name="amount" placeholder="montant">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

</div>

<?php 
require "layout/footer.php"; 
?>
