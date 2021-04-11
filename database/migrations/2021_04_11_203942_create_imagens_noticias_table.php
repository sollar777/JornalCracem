<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagensNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens_noticias', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("path");
            
            $table->unsignedBigInteger("noticia_id");
            $table->foreign("noticia_id")->references("id")->on("noticias");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagens_noticias');
    }
}
