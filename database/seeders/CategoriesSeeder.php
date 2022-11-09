<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stockage = Category::create(['title' => 'Stockage', 'slug' => 'Stockage']);
        $serveur = Category::create(['title' => 'Serveur', 'slug' => 'title']);
        $reseau = Category::create(['title' => 'Réseaux', 'slug' => 'reseaux']);
        $autres = Category::create(['title' => 'Autres', 'slug' => 'autres']);
        $stockageNis = Category::create([
            'title' => 'Stockage NIS',
            'parent_id' => $stockage->id,
            'slug' => 'Stockage-NIS'
        ]);
        $stockageNas = Category::create([
            'title' => 'Stockage NAS',
            'parent_id' => $stockage->id,
            'slug' => 'Stockage-NAS'
        ]);
        $stockageSan = Category::create([
            'title' => 'Stockage SAN',
            'parent_id' => $stockage->id,
            'slug' => 'Stockage-SAN'
        ]);
        $stockageDc = Category::create([
            'title' => 'Stockage DC',
            'parent_id' => $stockage->id,
            'slug' => 'Stockage-DC'
        ]);

        $memoires = Category::create([
            'title' => 'Mémoires',
            'parent_id' => $autres->id,
            'slug' => 'Memoires'
        ]);

        $connectiques = Category::create([
            'title' => 'Connectiques',
            'parent_id' => $autres->id,
            'slug' => 'Connectiques'
        ]);

        $accessoires = Category::create([
            'title' => 'Accessoires',
            'parent_id' => $autres->id,
            'slug' => 'Accessoires'
        ]);

        $DisquesDurs = Category::create([
            'title' => 'Disques Durs',
            'parent_id' => $memoires->id,
            'slug' => 'Memoires'
        ]);
    }
}
