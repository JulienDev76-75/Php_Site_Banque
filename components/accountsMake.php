<?php
    include "layout/header.php";
    include ("account.php");
    $accounts = $_GET;
?>

<!-- I load the acounts.php file -->
<?php include ("acounts.php"); ?>

<?php
// I browse the get_accounts () function present in the acounts.php file and for each data present I ask it to display the cards to the customer
foreach($accounts as $account){
  echo "<article class='container-fluid col-lg-3 my-lg-5'>
          <div class='card text-center mt-4'>
            <div class='card-header py-lg-3 fs-5'>" . $account["name"] . "</div>
            <div class='card-body'>
              <h6 class='card-subtitle mb-2 text-muted'>" . $account["number"] . "</h6>
              <p class='card-text'>Solde : <strong>". $account["amount"] . " €</strong></p>
              <hr>
              <p class='card-text onlyComputer'>Dernière opération : <br/> <strong>". $account["last_operation"] . "</strong></p>
              <hr>
              <a class='btn colorButton' href='oualler.php?owner=".$account["owner"]."&amp;name=".$account["name"]."&amp;number=".$account["number"]."&amp;amount=".$account["amount"]."&amp;last_operation=".$account["last_operation"]."' role='button'>Accedez au compte</a>
          </div>
          </div>
        </article>";
}
?>

<?php
include "layout/footer.php";
?>