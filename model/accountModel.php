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

function getSingleAccount (PDO $db, string $last_operation_type) {
    $query = $db->prepare("SELECT * FROM account_operation WHERE last_operation_type=:last_operation_type");
    $query->execute([
        "last_operation_type" => $last_operation_type
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>