<?php

require 'includes/paypal/autoload.php';

define('URL_SITIO', 'http://localhost/gdlwebcamp');

$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    'Af2Ul4cWEloNuryYUNJjPrZdLuciXBtzeCfw-0sZTURB-B_XUGGqGSyBDwyHnSQw49UmWzmn62cwQekt',//ID Cliente
    'EErvMrDjYFq0LT8408bABaSeR3GROx3voNoJxcJvwNMWHmmUxO7znI1YQP8rZx6Rj5uQmt3jtmwlh0Fi'//Secret
    )
  );


 ?>
