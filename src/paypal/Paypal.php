<?php

namespace Src\paypal;

use Src\paypal\IPaypalPayments;

class Paypal implements IPaypalPayments
{
    public function efetuaPagamento()
    {
        echo "Fazendo um pagamento com o paypal<br/>";
    }

    public function guardaPagamento()
    {
        echo "Recebendo um pagamento com o paypal";
    }
}
