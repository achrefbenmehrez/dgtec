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
            $table->string('capacite');
            $table->string('DWPD');
            $table->string("format");
            $table->string("interfaceInterne");
            $table->string("SerieHDD");
            $table->string("SMART");
            $table->string("interfaceDisque");
            $table->integer("TBW");
            $table->integer("tempsEntrePannes");
            $table->string("typeDD");
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
