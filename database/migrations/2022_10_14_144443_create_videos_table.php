<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            
            $table->id();

            $table->string('nomVideo', '150') -> nullable();
            $table->string('image') -> nullable();
            $table->string('video') -> nullable();

            $table->string('iconeProfil', '180') -> nullable();
            $table->string('createur', '50') -> nullable();

            $table->integer('nbreVues') -> nullable();
            $table->integer('durée') -> nullable();

            $table->boolean('like') -> nullable();
            $table->boolean('dislike') -> nullable();
            
            $table->text('description') -> nullable();
            $table->text('commentaires') -> nullable();

            $table->integer('nbreAbonnés') -> nullable();
            $table->boolean('sAbonner') -> nullable();

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
        Schema::dropIfExists('videos');
    }
}
