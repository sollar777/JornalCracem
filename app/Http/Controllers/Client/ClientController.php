<?php

namespace App\Http\Controllers\Client;

use App\Repository\Contract\ClientContractInterface;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{

    public function index(ClientContractInterface $notice)
    {
        $noticias = $notice->all();

        return view('user.index', compact('noticias'));
    }

    public function store($id, ClientContractInterface $notice)
    {
        $noticia = $notice->store($id);

        return view('user.noticia', compact('noticia'));
    }

    public function exibirAll()
    {
        return view('user.listas_noticias');
    }

    public function gataExibir()
    {
        return view('user.gatamangaba');
    }

    public function social()
    {
        return view('user.social');

    }
    
}
