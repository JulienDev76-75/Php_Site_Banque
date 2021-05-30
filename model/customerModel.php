<?php
//Rappel, un fichier = 1 table dans ta BDD, table account donc un fichier accountModel, une table opération donc un fichier operationModel etc.
//deux paramètres : la connexion à la base de donnée + une chaine de caractère (param arbitraire)
function getCustomerByEmail(PDO $db, string $email) {
//On prépare la requête vers la base de donnée, $query est une convention / variable dans laquelle on va stock la demande
//le WHERE MAIL est là pour sélectionner toutes les entrée mail de la table customer de tous les clients (ici y'en a que deux)
$query = $db->prepare("SELECT * FROM customer WHERE mail=:email");
//$db->prepare on demande à la base de donnée de préparer la demande suivante, on demande de selectionner toutes les données customer dans l'entrée mail
//ensuite une fois la demande préparée et stockée dans $query, on éxécute la demande, clé = "email" et la valeur est $email, on remplace email par $email
$query->execute([
    "email" => $email
]);
//on stock l'éxécution dans une variable $result = requête ($query) + lancement requête par le chevron (->) et ensuite fetch qui va chercher les informations de notre requête
//Fetch ASSOC : Récupère une ligne de résultat sous forme de tableau associatif
$result = $query->fetch(PDO::FETCH_ASSOC);
//tu retournes le résultat $result qui sera pour l'instant sous forme de TABLEAU
//si tu veux afficher -> $result["email"] par exemple, tu peux concaténer les variables
return $result;
}

?>

<!-- (php) while $result = $query->fetch() { (finphp)
<table>
<tr>
    <td> (php) echo $result["firstname"];(finphp) </td>
    <td> (php) echo $result["lastname"];(finphp) </td>
</tr>
} -->