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
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string("raisonSociale");
            $table->string("nomCommercial");
            $table->integer("numTel");
            $table->string("siteWeb")->nullable();
            $table->string("identifiantUnique");
            $table->string("RNE");
            $table->string("formeJuridique")->nullable();
            $table->string("nomComptable")->nullable();
            $table->string("emailComptable")->nullable();
            $table->boolean("formatPapier")->nullable();
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
        Schema::dropIfExists('societes');
    }
};
