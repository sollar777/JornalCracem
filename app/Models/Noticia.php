<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $table = "noticias";

    public function grupo_noticia()
    {
        return $this->belongsTo(Grupo_Noticia::class, "grupo_id", "id");
    }
}
