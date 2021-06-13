<?php
require "layout/header.php";
?>

<main>

<h2 class="text-center mt-5 text-danger">Vos comptes en banque</h2>
<div class="row d-flex justify-content-center m-5">
    <!-- On parcours le tableau de compte à l'aide d'une foreach à syntaxe simplifiée -->
    <?php foreach($accounts as $account): ?>
        <div class="col-md-3 mb-5 mx-5 text-center">
            <div class="card text-center mx-auto">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $_SESSION["user"]["firstname"] ." ". $_SESSION["user"]["lastname"];?></h5>
                    <p class="card-subtitle"><?php echo $account["account_name"]?></p>
                    <p class="card-text"><?php echo "N° de compte : " . $account["account_number"] ?></p>
                    <p class="card-text"><?php echo "Votre compte contient : " . $account["amount_account"] . " euros"?></p>          
                    <a class="btn btn-dark text-white px-5" href="singleAccount.php?index=<?php echo $index;?>">Accédez aux détails</a>
                </div>
            </div>
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