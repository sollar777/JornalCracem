<?php

namespace App\Repository\Eloquent;

use App\Repository\Contract\ClientContractInterface;
use App\Models\Noticia;
use App\Repository\AbstractRepository;

class ClientRepository extends AbstractRepository implements ClientContractInterface
{
    protected $model = Noticia::class;
}