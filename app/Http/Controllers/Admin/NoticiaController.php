<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grupo_Noticia;
use App\Models\Imagem;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    private $noticias;
    
    public function __construct(Noticia $noticias)
    {
        $this->noticias = $noticias;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = $this->noticias->all();

        return view('admin.noticias.index', compact("noticias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Grupo_Noticia::all();
        return view('admin.noticias.create-noticia', compact("grupos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->file('imagem')){
            return response()->json(["message" => "Não foi enviado nenhuma Imagem"]);
        }
        //faltando criar rotina de salvar a noticia e a imagem com id da noticia
        if(!$request->file('imagem')->isValid()){
            return response()->json(["message" => "Imagem não é válida"]);
        }

        $data = $request->all();
        $noticia_principal = 0;

        if($request->has('noticia_principal')){
            $noticia_principal = -1;
        }

        $noticia = $this->noticias->create([
            "titulo" => $data["titulo"],
            "resumo" => $data["resumo"],
            "corpo" => $data["corpo"],
            "grupo_id" => $data["grupo_id"],
            "noticia_principal" => $noticia_principal
        ]);

        $imagem = new Imagem;

        $imagem->create([
            "path" => $request->file("imagem")->store('noticias/imagem/' . $noticia->id),
            "noticia_id" => $noticia->id
        ]);

        return redirect()->route('admin.noticias');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = $this->noticias->find($id);
        $grupos = Grupo_Noticia::all();

        return view('admin.noticias.edit-noticia', compact('noticia', 'grupos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticia = $this->noticias->find($id);
        $data = $request->all();
        $file = $noticia->imagens->path;

        if($request->has('imagem')){
            if($request->file('imagem')->isValid()){
                $noticia->imagens->delete();
                
                Storage::delete($file);
                
                $imagem = New Imagem;
    
                $imagem->create([
                    "path" => $request->file('imagem')->store('noticias/imagem/' . $noticia->id),
                    "noticia_id" => $noticia->id
                ]);
            }else{
                return response()->json(["message" => "mensagem invalida"]);
            }
        }

        $noticia_principal = 0;

        if($request->has('noticia_principal')){
            $noticia_principal = -1;
        }

        $noticia->update([
            "titulo" => $data["titulo"],
            "resumo" => $data["resumo"],
            "corpo" => $data["corpo"],
            "grupo_id" => $data["grupo_id"],
            "noticia_principal" => $noticia_principal
        ]);

        return redirect()->route('admin.noticias');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
