<?php
session_start();
if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

include ("layout/header.php"); 
require "model/connexion.php";
require "account/account.php";
$accounts = getAccounts();
?>

<main>

<h2 class="text-center mt-5 text-danger">Vos comptes en banque</h2>
<div class="row">
    <!-- On parcours le tableau de compte à l'aide d'une foreach à syntaxe simplifiée -->
    <?php foreach($accounts as $index => $account): ?>
            <div class='col-6 col-md-4'>
                <ul class="list-group my-5">
                    <?php foreach($account as $key=>$value): ?>
                        <li class="list-group-item"><?php echo "$key : $value"; ?></li>
                    <?php endforeach ?>
                        <li class="list-group-item text-center">
                            <!-- On passe dans l'url la position du compte à afficher sur la page single -->
                            <a class="btn btn-dark text-white px-5" href="singleAccount.php?index=<?php echo $index;?>">Accédez aux détails</a>
                        </li>
                </ul>
            </div>
    <!-- On ferme la foreach (équivalent de l'accolade fermante) -->
    <?php endforeach; ?>
</div>

</main>

 <?php include ("layout/footer.php"); ?> 

  <!-- Add your site or application content here -->
  <script src="https://kit.fontawesome.com/6e3dce75fc.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
