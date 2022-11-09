<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Catalogue;
use App\Models\Telechargement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CatalogueController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::get();

        return view('back.catalogues.index', [
            'catalogues' => $catalogues
        ]);
    }

    public function create()
    {
        $catalogues = Catalogue::get();

        return view('back.catalogues.create', [
            'catalogues' => $catalogues
        ]);
    }

    public function store(Request $request)
    {
        $validatedCatalogue = $request->validate([
            'name' => 'required', 'max:255',
            'donnees_telechargements' => 'array',
        ]);

        if ($validatedCatalogue['donnees_telechargements']) {
            $temp = array();

            foreach ($request->donnees_telechargements as $photoUrl) {
                $imageName = $photoUrl->getClientOriginalName();
                $imagePath = $photoUrl->storeAs('donneesCatalogues', $imageName, 'public');
                array_push($temp, 'storage/' . $imagePath);
            }
        }

        $validatedCatalogue['slug'] = Str::slug($validatedCatalogue['name']);

        $telechargement = Telechargement::create([
            'attachementsUrl' => $temp
        ]);

        Catalogue::create([
            'name' => $validatedCatalogue['name'],
            'slug' => $validatedCatalogue['slug'],
            'telechargement_id' => $telechargement->id
        ]);

        return redirect()->route('admin.catalogues.index')->with('status', 'Catalogue cree avec succes');
    }

    public function edit(Catalogue $catalogue)
    {
        return view('back.catalogues.edit', [
            'catalogue' => $catalogue
        ]);
    }

    public function update(Request $request, Catalogue $catalogue)
    {
        $validatedCatalogue = $request->validate([
            'name' => 'required', 'max:255',
            'donnees_telechargements' => 'array',
        ]);

        if ($validatedCatalogue['donnees_telechargements']) {
            $temp = array();

            foreach ($request->donnees_telechargements as $photoUrl) {
                $imageName = time() . '_' . $photoUrl->getClientOriginalName();
                $imagePath = $photoUrl->storeAs('donneesCatalogues', $imageName, 'public');
                array_push($temp, 'storage/' . $imagePath);
            }
        }

        $validatedCatalogue['slug'] = Str::slug($validatedCatalogue['name']);

        $catalogue->update([
            'name' => $validatedCatalogue['name'],
            'slug' => $validatedCatalogue['slug']
        ]);

        if ($validatedCatalogue['donnees_telechargements']) {
            $catalogue->telechargements()->attach($temp);
        }

        return redirect()->route('admin.catalogues.index')->with('status', 'Catalogue modifié avec succes');
    }

    public function destroy(Catalogue $catalogue)
    {
        $catalogue->delete();

        return 'Catalogue' . $catalogue->title . ' deleted';
    }
}
