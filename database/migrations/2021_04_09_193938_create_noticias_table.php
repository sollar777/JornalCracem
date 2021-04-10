<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("titulo");
            $table->text("resumo");
            $table->text("corpo");
            $table->boolean("noticia_principal");

            $table->unsignedBigInteger("grupo_id");
            $table->foreign("grupo_id")->references("id")->on("grupo_noticia");

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
        Schema::dropIfExists('noticias');
    }
}
