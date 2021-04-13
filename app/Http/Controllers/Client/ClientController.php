<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class ClientController extends Controller
{
    private $noticias;

    public function __construct(Noticia $noticias)
    {
        $this->noticias = $noticias;
    }

    public function index()
    {
        $noticias = $this->noticias->all();
        return view('user.index', compact('noticias'));
    }

    public function store($id)
    {
        return view('user.noticia');
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

    public function anunciantes()
    {
        $anunciantes = $this->noticias->all();

        return response()->json($anunciantes);
    }
}
