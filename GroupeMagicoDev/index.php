<?php

require_once 'class/Account.php';
require_once 'class/SavingAccount.php';

$account1 = new Account('Sabri', "0");
echo $account1 . "<br>";

$account1->deposit("100") . "<br>";

$account2 = new Account("Thierry", 1000);
echo $account2 . "<br>";

$account3 = new SavingAccount("Hind", 2000, 7);
echo $account3;
$account3->applyInterest();

echo $account3;