<?php

namespace Src\paypal;

interface IPaypalPayments
{
    public function efetuaPagamento();
    public function guardaPagamento();
}
