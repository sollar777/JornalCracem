<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo_Noticia extends Model
{
    use HasFactory;

    protected $table = "grupo_noticia";

    protected $fillable = [
        "nome"
    ];

    public function noticia()
    {
        return $this->hasMany(Noticia::class, "id", "grupo_id");
    }

}
