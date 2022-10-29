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
        Schema::create('r_m_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('numero');
            $table->foreignId('societe_id')->constrained('societes');
            $table->foreignId('adresse_facturation_id')->constrained('adresse_facturations');

            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('facture_id')->nullable()->constrained('factures');
            $table->foreignId('product_id')->nullable()->constrained('products');
            $table->foreignId('commande_id')->nullable()->constrained('commandes');
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
        Schema::dropIfExists('r_m_a_s');
    }
};
