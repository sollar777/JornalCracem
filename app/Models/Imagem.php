<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;

    protected $table = "imagens_noticias";

    protected $fillable = [
        "path",
        "noticia_id"
    ];

    public function noticia()
    {
        return $this->belongsTo(Noticia::class, "noticias_id", "id");
    }
}
