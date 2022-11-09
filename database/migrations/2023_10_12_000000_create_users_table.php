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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string("prenom");
            $table->integer("telephone");
            $table->string("login")->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('fax')->nullable();
            $table->string("moyen_payement")->nullable();
            $table->string("transporteur")->nullable();
            $table->boolean("active")->default(0);

            $table->foreignId('societe_id')
                ->constrained('societes')
                ->cascadeOnDelete();

            $table->foreignId('adresse_facturation_id')
                ->constrained('adresse_facturations')
                ->cascadeOnDelete();

            $table->foreignId('adresse_livraison_id')
                ->nullable()
                ->constrained('adresse_livraisons')
                ->cascadeOnDelete();
                
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
