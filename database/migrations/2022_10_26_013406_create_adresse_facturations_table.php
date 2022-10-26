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
        Schema::create('adresse_facturations', function (Blueprint $table) {
            $table->id();
            $table->string("destinataire");
            $table->string("adresse");
            $table->string("complement");
            $table->string("code_postal");
            $table->string("ville");
            $table->string("pays");
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
        Schema::dropIfExists('adresse_facturations');
    }
};
