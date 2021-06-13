<?php include "layout/header.php"; 

$json = "stat.json";
$jsonfile = file_get_contents($json);
?>

<h2 class="text-center pt-5">L'économie en bref</h2>


<?php
$script = "<script src='public/js/statistic.js'></script>";
include "layout/footer.php";
?>