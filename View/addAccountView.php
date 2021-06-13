<?php 
 require "layout/header.php";
 ?> 

<h3 class="mb-5">Créer un nouveau compte</h3>

<form action="addAccount.php" method="post">
  <div class="mb-3">
    <select class="form-select" for="account_type" name="account_type">
      <option selected value="Compte">Compte</option>
      <option value="Livret A">Livret A</option>
      <option value="PEL">PEL</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="amount-account" class="form-label">Montant du compte</label>
    <input type="number" class="form-control" name="amount">

    </div>
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php 
require "layout/footer.php"; 
?>
