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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();

            $table->enum('etat', [
                'RÉGLÉE',
                'EN COURS',
                'NON RÉGLÉE'
            ]);
            $table->enum('type', [
                'FACTURE',
                'AVOIR'
            ]);
            $table->double('total');

            $table->foreignId('commande_id')
                ->constrained('commandes')
                ->onDelete('cascade');

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('factures');
    }
};
