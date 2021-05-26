<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=banque_sql;charset=utf8', 'root', 'johnkeynes*!76');
}
// Si une erreur est levée on l'attrape et on affiche son message
catch(Exception $error) {
    die($error->getMessage());
}
?>