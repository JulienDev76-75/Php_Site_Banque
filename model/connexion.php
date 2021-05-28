<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=banque_sql;charset=utf8', 'root', '');
}

catch(Exception $error) {
    die($error->getMessage());
}
?>