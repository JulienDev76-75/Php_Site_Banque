<?php
// function that returns an associative array of data for the home page
function get_accounts() {
  return [
    [
      "name" => "Compte courant",
      "number" => "N:0132520024 fr 45",
      "owner" => "Mr Gossart Thomas",
      "amount" => 250,
      "last_operation" => "auchan -97.36 €"
    ],
    [
      "name" => "Livret A",
      "number" => "N:0132520024 fr 45",
      "owner" => "Mr Gossart Thomas",
      "amount" => 1500,
      "last_operation" => "depot +45 €"
    ],
    [
      "name" => "PEL",
      "number" => "N:0132520024 fr 45",
      "owner" => "Mr Gossart Thomas",
      "amount" => 480,
      "last_operation" => "depot +150 €"
    ],
  ];
}

// I browse the get_accounts () function present in the acounts.php file and for each data present I ask it to display the cards to the customer
foreach(get_accounts() as $account){
  // I replace in the text htlm the value present in the file acounts.php
  // the button contains the parameters for the transmission by the URL, which are then retrieved in the file voirCompte.php
  echo "<article class='container-fluid col-lg-3 my-lg-5'>
          <div class='card text-center mt-4'>
            <div class='card-header py-lg-3 fs-5'>" . $account["name"] . "</div>
            <div class='card-body'>
              <h6 class='card-subtitle mb-2 text-muted'>" . $account["number"] . "</h6>
              <p class='card-text'>Solde : <strong>". $account["amount"] . " €</strong></p>
              <hr>
              <p class='card-text onlyComputer'>Dernière opération : <br/> <strong>". $account["last_operation"] . "</strong></p>
              <hr>
              <a class='btn colorButton' href='voirCompte.php?owner=".$account["owner"]."&amp;name=".$account["name"]."&amp;number=".$account["number"]."&amp;amount=".$account["amount"]."&amp;last_operation=".$account["last_operation"]."' role='button'>Accedez au compte</a>
          </div>
          </div>
        </article>";
}
?>