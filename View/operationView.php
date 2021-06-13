<?php
 include "layout/header.php"; 
?>

<?php
    echo $error;
    echo $success;
?>  
<form action="" method="post">
    <div class="mb-3">
        <label for="amount" class="form-label">Montant (précisez avec + ou -)</label>
        <input type="number" class="form-control" name="amount">
    </div>    
    <div class="mb-3">
        <label for="label" class="form-label">Raison de l'opération</label>
        <input type="text" class="form-control" name="label">  
    </div>
    <button type="submit" class="btn btn-dark text-white">Valider</button>
</form>

<?php include "layout/footer.php"; ?>