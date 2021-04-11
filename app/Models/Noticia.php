<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $table = "noticias";

    protected $fillable = [
        "titulo",
        "resumo",
        "corpo",
        "noticia_principal",
        "grupo_id"
    ];

    public function grupo_noticia()
    {
        return $this->belongsTo(Grupo_Noticia::class, "grupo_id", "id");
    }

    public function imagens()
    {
        return $this->hasOne(Imagem::class, "noticia_id", "id");
    }
}
