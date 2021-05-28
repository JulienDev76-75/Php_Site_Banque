<?php

function getCustomerByEmail(PDO $db, string $email) {
$query = $db->prepare("SELECT * FROM customer WHERE mail=:email");
$query->execute([
    "email" => $email
]);
$result = $query->fetch(PDO::FETCH_ASSOC);
return $result;
}

?>