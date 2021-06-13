<?php

    require "model/connexion.php";

    if(!empty($_POST) && isset($_POST)) {
        $user = $_POST;
        foreach($user as $key => $value) {
            $user[$key] = htmlentities($value);

            if(empty($user["email"])) 
            {
                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
                {
                echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';
                }
                else
                {
                echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
                }
            }
        
            if(empty($user["motdepasse"])) 
            {
                if (preg_match("", $_POST['motdepasse']))
                {
                echo 'Votre' . $_POST['motdepasse'] . ' est <strong>valide</strong> !';
                }
                else
                {
                 echo 'Mot de passe invalide';
                }
            }

            // if(empty($user["firstname"])) 
            // {
            //     echo 'Votre' . $_POST['motdepasse'] . ' est <strong>valide</strong> !';
            //     }
            //     else
            //     {
            //      echo 'Mot de passe invalide';
            //     }
            // }

            // if(empty($user["motdepasse"])) 
            // {
            //     if (preg_match("", $_POST['motdepasse']))
            //     {
            //     echo 'Votre' . $_POST['motdepasse'] . ' est <strong>valide</strong> !';
            //     }
            //     else
            //     {
            //      echo 'Mot de passe invalide';
            //     }
            // }

            // if(empty($user["motdepasse"])) 
            // {
            //     if (preg_match("", $_POST['motdepasse']))
            //     {
            //     echo 'Votre' . $_POST['motdepasse'] . ' est <strong>valide</strong> !';
            //     }
            //     else
            //     {
            //      echo 'Mot de passe invalide';
            //     }
            // }

            // if(empty($user["motdepasse"])) 
            // {
            //     if (preg_match("", $_POST['motdepasse']))
            //     {
            //     echo 'Votre' . $_POST['motdepasse'] . ' est <strong>valide</strong> !';
            //     }
            //     else
            //     {
            //      echo 'Mot de passe invalide';
            //     }
            // }
        
        }
        $result = addUser($db);
    }


    require "view/newCustomerView.php";
?>
