<?php
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Customer.php';

$croccantini = new Food('croccantini', 50.0, "Croccantini per cani", "carne, miele, riso");
$bocconcini = new Food('bocconcini', 30.0, "Bocconcini di carne", "carne");

$card = new CreditCard(12345678901234567890, 2025, 30.00);
$customer = new Customer("Pippo", "Micco", 53, $card, true);
echo $customer->buyProduct($croccantini);

$card->setBalance(200);
echo "<br>";
echo "Disponibilità al momento: " . $customer->getBalance();

/*
echo "<br>";
echo $customer->buyProduct($croccantini);
*/

/*
echo "<pre>";
var_dump($customer);
echo "</pre>";
*/







//echo $croccantini->getDescription();
