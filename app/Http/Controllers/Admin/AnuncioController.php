<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnuncioController extends Controller
{

    private $anuncios;

    public function __construct(Anuncio $anuncios)
    {
        $this->anuncios = $anuncios;
    }

    public function index()
    {
        $anuncios = $this->anuncios->all();

        return view('admin.anuncios.anuncios_index', compact('anuncios'));
    }

    public function create()
    {
        return view('admin.anuncios.anuncios_create');
    }

    public function store(Request $request)
    {
        
        if(!$request->file('imagem')){
            return response()->json(["message" => "Não foi enviado nenhuma Imagem"]);
        }

        if(!$request->file('imagem')->isValid()){
            return response()->json(["message" => "Imagem não é válida"]);
        }

        $data = $request->all();
        $desativado = 0;

        $this->anuncios->create([
            'titulo' => $data['titulo'],
            'path' => $request->file("imagem")->store('anuncios/imagem'),
            'url' => $data['url'],
            'desativado' => $desativado
        ]);

        return redirect()->route('admin.anuncio.exibir');

    }

    public function edit($id)
    {
        $anuncio = $this->anuncios->find($id);

        return view('admin.anuncios.anuncios_edit', compact('anuncio'));
    }

    public function update(Request $request, $id)
    {

        $anuncio = $this->anuncios->find($id);
        $data = $request->all();
        $file = $anuncio->path;

        if($request->has('imagem')){
            if($request->file('imagem')->isValid()){
                
                Storage::delete($file);
            }       
        }else{
            return response()->json(["message" => "Imagem não é válida"]);
        }

        $desativado = 0;
        if($request->has('desativado')){
            $desativado = -1;
        }

        $anuncio->update([
            'titulo' => $data['titulo'],
            'path' => $request->file("imagem")->store('anuncios/imagem'),
            'url' => $data['url'],
            'desativado' => $desativado
        ]);

        return redirect()->route('admin.anuncio.exibir');

    }

}
