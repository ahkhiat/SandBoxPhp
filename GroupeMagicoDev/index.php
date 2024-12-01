<?php

require_once 'class/Account.php';

$account1 = new Account('Sabri', "0");
echo $account1 . PHP_EOL;

$account1->deposit("100") . PHP_EOL;

$account2 = new Account("Thierry", 1000);
echo $account2 . PHP_EOL;