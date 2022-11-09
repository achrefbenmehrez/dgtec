<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_techniques', function (Blueprint $table) {
            $table->id();
            $table->integer('capacite')->nullable();
            $table->enum('categorie', [
                'DDR3',
                'DDR4',
                'DDR5'
            ])->nullable();
            $table->string('format')->nullable();
            $table->integer('frequence')->nullable();
            $table->enum('type', [
                'LOAD REDUCED',
                'ECC/REGISTERED',
                'UNBUFFERED',
                'ECC',
                'REGISTERED',
            ])->nullable();
            $table->string('alimentationDD')->nullable();
            $table->string('plateformeCompatible')->nullable();
            $table->double('voltage')->nullable();
            $table->string('organisation')->nullable();
            $table->string('DWPD')->nullable();
            $table->string("interfaceInterne")->nullable();
            $table->string("SerieHDD")->nullable();
            $table->string("SMART")->nullable();
            $table->string("interfaceDisque")->nullable();
            $table->integer("TBW")->nullable();
            $table->integer("tempsEntrePannes")->nullable();
            $table->string("typeDD")->nullable();
            $table->integer("emplacements_memoire")->nullable();
            $table->integer("taille_memoire_base")->nullable();
            $table->integer("taille_memoire_max")->nullable();
            $table->enum('typeBoitier', [
                'Tour',
                'Rack'
            ])->nullable();
            $table->integer('nbreBaies')->nullable();
            $table->integer("nbreDD")->nullable();
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
        Schema::dropIfExists('fiche_techniques');
    }
};
