<?php

namespace App\Repository\Contract;

interface ClientContractInterface
{

    public function all();

    public function store($id);

}