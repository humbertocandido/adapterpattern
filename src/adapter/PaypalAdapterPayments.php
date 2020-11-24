<?php

namespace Src\adapter;

use Src\payone\IPayonePayments;
use Src\paypal\IPaypalPayments;

class PaypalAdapterPayments implements IPaypalPayments
{
    private $payone;

    public function __construct(IPayonePayments $payone)
    {
        $this->payone = $payone;
    }

    public function efetuaPagamento()
    {
        $this->payone->fazPagamento();
    }

    public function guardaPagamento()
    {
        $this->payone->recebePagamento();
    }
}
