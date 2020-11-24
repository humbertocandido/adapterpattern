<?php

namespace Src\payone;

class Payone implements IPayonePayments
{
    public function fazPagamento()
    {
        echo "Estou pagando com payone<br/>";
    }

    public function recebePagamento()
    {
        echo "Estou recebendo com payone";
    }
}
