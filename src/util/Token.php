<?php

namespace Src\util;

class Token
{
    private $token;

    public function __construct()
    {
        $this->token = "fljsdakjfodysafdsahjlfdalsjflkasdjç";
    }

    public function getToken()
    {
        return $this->token;
    }
}
