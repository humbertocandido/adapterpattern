<?php

use Src\adapter\PaypalAdapterPayments;
use Src\payone\Payone;
use Src\paypal\IPaypalPayments;
use Src\paypal\Paypal;

require_once __DIR__ . "./vendor/autoload.php";

$pagamento = new Paypal();
$pagamento->efetuaPagamento();
$pagamento->guardaPagamento();

echo "<br><br><br>";
$pagamento = new PaypalAdapterPayments(new Payone);
$pagamento->efetuaPagamento();
$pagamento->guardaPagamento();
