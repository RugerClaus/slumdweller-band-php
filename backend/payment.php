<?php

require_once('../vendor/autoload.php');

use Stripe\BaseStripeClient;

$stripe = new Stripe\StripeClient(
    'sk_test_51LwYi8E5R0JrGrGVuTpaxrAVl29pMXoVSGroG4IyUxqPg3WVLTpFs2wjuCgt6KKKDpyQtuXKNWJgKX77fU4aXKO000dEyFw9ZR'
  );
$paymentIntent = $stripe->paymentIntents->create([
'amount' => 2000,
'currency' => 'usd',
'payment_method_types' => ['card'],
]);

?>

