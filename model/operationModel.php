<?php  

function getOperation(PDO $db, int $id) {
    $query = $db->prepare("SELECT * FROM account_operation WHERE id =:id");
    $query->execute([
        "accountId" => $accountId
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>
