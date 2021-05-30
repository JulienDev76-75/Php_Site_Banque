<p>
    le but est de créer un formulaire pour les gens co afin qu'il se crée un nouveau compte associé à un compte
</p>

<form action="accountCreate.php" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
</form>

<!-- $_FILES['accountCreate.php']['prénom'] 
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
 
}

$_SESSION['prenom'] = $_POST['prenom']; ?
    Salut (php) echo $_SESSION['prenom']; (finphp) !<br />
$_SESSION['nom'] = 'Dupont';


Une fois le formulaire de création de compte rempli, cela doit s'aficher sur la page d'accueil !

REGEX : 
<p>
if (isset($_POST['mail']))
{
    $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';
    }
    else
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }
}
</p>


-->