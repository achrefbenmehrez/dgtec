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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->decimal('price');
            $table->json('photosUrl');
            $table->integer('quantiteStock');
            $table->string('slug');
            $table->integer('ansGarantie')->nullable()->default(0);
            $table->datetime('dateFinPromo')->nullable();
            $table->integer('ref_fabricant');
            $table->integer("EAN");
            $table->string("annee_production")->nullable();

            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            $table->foreignId('brand_id')
                ->constrained('brands')
                ->cascadeOnDelete();

            $table->foreignId('fiche_technique_id')
                ->constrained('fiche_techniques')
                ->cascadeOnDelete();

            $table->foreignId('telechargement_id')
                ->constrained('telechargements');

            $table->foreignId('famille_id')
                ->constrained('familles')
                ->cascadeOnDelete();

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
        Schema::dropIfExists('products');
    }
};
