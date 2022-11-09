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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->enum('etat', ['Livré', 'En cours', 'Annulé']);
            $table->enum('type', ['En Local', 'Livraison']);
            $table->boolean('livraisonPartielle')->default(0);
            $table->string('referenceClient')->nullable();

            $table->foreignId('user_id')
                ->constrained('users')
                ->nullable();

            $table->foreignId('adresse_livraison_id')
                ->constrained('adresse_livraisons')
                ->nullable();

            $table->longText('donnees_panier');

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
        Schema::dropIfExists('commandes');
    }
};
