<?php   
    require "model/connexion.php";
    require "model/customerModel.php";

    //si le champs email et mdp ont été remplis
    if (isset($_POST["mail"]) && isset($_POST["password"])) {
        $user = getCustomerByEmail($db, $_POST["mail"]);
        //si on a trouvé un user avec cet email
        if($user) {
            //on vérifie le mdp , si le mdp transmis par formulaire est === au mdp dans la bdd alors je la connecte
            if (password_verify($_POST["password"], $user["customer_password"])) {
                //On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer
                session_start();
                //On crée a session User qu'on stocke dans $user
                $_SESSION["user"] = $user;
                header("Location:index.php");
                exit;
            }
        }
    //si les identifiants ne sont pas bons
    else {
        $error_message = "Identifiants incorrects";
    }
}
    require "View/loginView.php";
?>