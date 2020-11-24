<?php

namespace Src\payone;

interface IPayonePayments
{
    public function fazPagamento();
    public function recebePagamento();
}
