<?php

function getAccounts (PDO $db, int $customer_id) {
    $query = $db->prepare("SELECT * FROM account WHERE customer_id=:customer_id");
    $query->execute([
        "customer_id" => $customer_id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// SELECT account_name, account_number, amount_account, firstname, lastname, postal_code, country
// FROM account AS a
// RIGHT JOIN customer AS c
// ON a.account_id = c.customer_id
// WHERE customer_id=:customer_id

function getSingleAccount (PDO $db, int $customer_id, int $id) {
    $query = $db->prepare("SELECT account_name, account_number, amount_account, firstname, lastname FROM account WHERE customer_id=:customer_id AND id=:id");
    $query->execute([
        "customer_id"=> $customer_id,
        "id" => $id
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function addAccount(PDO $db) {
    $query = $db->prepare("INSERT INTO account(account_name, account_number, amount_account, creation_date, customer_id) VALUES(:account_type, :account_number, :amount_account, NOW(), :customer_id)");
    $result = $query->execute([
       'account_name' => $_POST["account_name"],
        'amount' => $_POST["amount_account"],
        'user_id' => $_SESSION["user"]["id"],
        ]);
    return $result;     
}

// function updateAccounts(PDO $db, int $amount_account, int $account_id) {
//     $query = $db->prepare("UPDATE account SET amount_account =:amount_account WHERE id =:account_id");
//     $result = $query->execute([
//         "amount"=> $amount_account,
//         "account_id"=> $account_id,
//     ]);
//     return $result;
// }

?>