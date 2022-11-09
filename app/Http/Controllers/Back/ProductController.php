<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Famille;
use App\Models\FicheTechnique;
use App\Models\Product;
use App\Models\Telechargement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

        return view('back.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::get();
        $marques = Brand::get();
        $familles = Famille::get();

        return view('back.products.create', [
            'categories' => $categories,
            'marques' => $marques,
            'familles' => $familles
        ]);
    }

    public function store(Request $request)
    {
        $validatedProduct = $request->validate([
            'name' => 'required', 'max:255',
            'price' => 'numeric',
            'description' => 'required', 'max:255',
            'quantiteStock' => 'required', 'min:0',
            'photosUrl' => 'array',
            'category_id' => 'required', 'exists:categories,id',
            'capacite' => 'required', 'max:255',
            'ref_fabricant' => 'required', 'integer',
            'EAN' => 'required', 'integer',
            'DWPD' => 'required', 'max:255',
            'format' => 'required', 'max:255',
            'interfaceInterne' => 'required', 'max:255',
            'SerieHDD' => 'required', 'max:255',
            'SMART' => 'required', 'max:255',
            'interfaceDisque' => 'required', 'max:255',
            'tempsEntrePannes' => 'required', 'integer',
            'typeDD' => 'required', 'max:255',
            'telechargements' => 'array',
            'TBW' => 'required', 'integer',
            'dateFinPromo' => '',
            'garantie' => '',
            'categorie' => '',
            'frequence' => '',
            'type' => '',
            'alimentationDD' => '',
            'plateformeCompatible' => '',
            'voltage' => '',
            'organisation' => '',
            'nbreBaies' => '',
            'typeBoitier' => '',
            'marque_id' => 'required', 'exists:brands,id',
            'annee_production' => '',
            'famille_id' => '',
            'emplacements_memoire' => '',
            'taille_memoire_base' => '',
            'taille_memoire_max' => '',
            'nbreDD' => ''
        ]);

        if ($validatedProduct['photosUrl']) {
            $temp = array();

            foreach ($request->photosUrl as $photoUrl) {
                $imageName = time() . '_' . $photoUrl->getClientOriginalName();
                $imagePath = $photoUrl->storeAs('imagesProduits', $imageName, 'public');
                array_push($temp, 'storage/' . $imagePath);
            }

            $validatedProduct['photosUrl'] = $temp;
        }

        if ($validatedProduct['telechargements']) {
            $temp = array();

            foreach ($request->telechargements as $photoUrl) {
                $imageName = $photoUrl->getClientOriginalName();
                $imagePath = $photoUrl->storeAs('telechargementsProduits', $imageName, 'public');
                array_push($temp, 'storage/' . $imagePath);
            }

            $validatedProduct['attachementsUrl'] = $temp;
        }

        $validatedProduct['slug'] = Str::slug($validatedProduct['name']);
        $validatedProduct['quantiteStock'] = $validatedProduct['quantiteStock'];

        $ficheTechnique = FicheTechnique::create([
            'capacite' => $validatedProduct['capacite'] ? $validatedProduct['capacite'] : null,
            'DWPD' => $validatedProduct['DWPD'] ? $validatedProduct['DWPD'] : null,
            'format' => $validatedProduct['format'] ? $validatedProduct['format'] : null,
            'interfaceInterne' => $validatedProduct['interfaceInterne'] ? $validatedProduct['interfaceInterne'] : null,
            'SerieHDD' => $validatedProduct['SerieHDD'] ? $validatedProduct['SerieHDD'] : null,
            'SMART' => $validatedProduct['SMART'] ? $validatedProduct['SMART'] : null,
            'interfaceDisque' => $validatedProduct['interfaceDisque'] ? $validatedProduct['interfaceDisque'] : null,
            'tempsEntrePannes' => $validatedProduct['tempsEntrePannes'] ? $validatedProduct['tempsEntrePannes'] : null,
            'typeDD' => $validatedProduct['typeDD'] ? $validatedProduct['typeDD'] : null,
            'TBW' => $validatedProduct['TBW'] ? $validatedProduct['TBW'] : null,
            'categorie' => $validatedProduct['categorie'] ? $validatedProduct['categorie'] : null,
            'frequence' => $validatedProduct['frequence'] ? $validatedProduct['frequence'] : null,
            'type' => $validatedProduct['type'] ? $validatedProduct['type'] : null,
            'alimentationDD' => $validatedProduct['alimentationDD'] ? $validatedProduct['alimentationDD'] : null,
            'plateformeCompatible' => $validatedProduct['plateformeCompatible'] ? $validatedProduct['plateformeCompatible'] : null,
            'voltage' => $validatedProduct['voltage'] ? $validatedProduct['voltage'] : null,
            'organisation' => $validatedProduct['organisation'] ? $validatedProduct['organisation'] : null,
            'nbreBaies' => $validatedProduct['nbreBaies'] ? $validatedProduct['nbreBaies'] : null,
            'typeBoitier' => $validatedProduct['typeBoitier'] ? $validatedProduct['typeBoitier'] : null,
            'emplacements_memoire' => $validatedProduct['emplacements_memoire'] ? $validatedProduct['emplacements_memoire'] : null,
            'taille_memoire_base' => $validatedProduct['taille_memoire_base'] ? $validatedProduct['taille_memoire_base'] : null,
            'taille_memoire_max' => $validatedProduct['taille_memoire_max'] ? $validatedProduct['taille_memoire_max'] : null,
            'nbreDD' => $validatedProduct['nbreDD'] ? $validatedProduct['nbreDD'] : null,
        ]);

        $telechargement = Telechargement::create([
            'attachementsUrl' => $validatedProduct['attachementsUrl'],
        ]);

        Product::create([
            'name' => $validatedProduct['name'],
            'slug' => $validatedProduct['slug'],
            'price' => $validatedProduct['price'],
            'description' => $validatedProduct['description'],
            'quantiteStock' => $validatedProduct['quantiteStock'],
            'photosUrl' => $validatedProduct['photosUrl'],
            'garantie' => $validatedProduct['garantie'] ? $validatedProduct['garantie'] : 0,
            'dateFinPromo' => $validatedProduct['dateFinPromo'],
            'ref_fabricant' => $validatedProduct['ref_fabricant'],
            'EAN' => $validatedProduct['EAN'],
            'fiche_technique_id' => $ficheTechnique->id,
            'telechargement_id' => $telechargement->id,
            'category_id' => $validatedProduct['category_id'],
            'brand_id' => $validatedProduct['marque_id'],
            'annee_production' => $validatedProduct['annee_production'] ? $request->annee_productionn . ' ' . $validatedProduct['annee_production'] : null,
            'famille_id' => $validatedProduct['famille_id'] ? $validatedProduct['famille_id'] : null,
        ]);

        return redirect()->route('admin.products.index')->with('status', 'Produit cree avec succes');
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function edit(Product $product)
    {
        $product->load(['category', 'ficheTechnique', 'telechargement']);

        $categories = Category::all();
        $marques = Brand::all();
        return view('back.products.edit', [
            'product' => $product,
            'categories' => $categories,
            'marques' => $marques
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validatedProduct = $request->validate([
            'name' => 'required', 'max:255',
            'price' => 'numeric',
            'description' => 'required', 'max:255',
            'quantiteStock' => 'required', 'min:0',
            'photosUrl' => 'array',
            'categories' => 'array',
            'garantie' => 'min:0',
            'capacite' => 'required', 'max:255',
            'ref_fabricant' => 'required', 'integer',
            'EAN' => 'required', 'integer',
            'DWPD' => 'required', 'max:255',
            'format' => 'required', 'max:255',
            'interfaceInterne' => 'required', 'max:255',
            'SerieHDD' => 'required', 'max:255',
            'SMART' => 'required', 'max:255',
            'interfaceDisque' => 'required', 'max:255',
            'tempsEntrePannes' => 'required', 'integer',
            'typeDD' => 'required', 'max:255',
            'telechargements' => 'array',
            'TBW' => 'required', 'integer',
            'category_id' => 'required', 'exists:categories,id',
            'marque_id' => 'required', 'exists:marques,id',
            'annee_production' => '',
            'famille_id' => '',
            'emplacements_memoire' => '',
            'taille_memoire_base' => '',
            'taille_memoire_max' => '',
            'nbreDD' => ''
        ]);

        if ($validatedProduct['photosUrl']) {
            $temp = array();

            foreach ($request->photosUrl as $photoUrl) {
                $imageName = time() . '_' . $photoUrl->getClientOriginalName();
                $imagePath = $photoUrl->storeAs('imagesProduits', $imageName, 'public');
                array_push($temp, 'storage/' . $imagePath);
            }

            $validatedProduct['photosUrl'] = $temp;
        }

        if ($validatedProduct['telechargements']) {
            $temp = array();

            foreach ($request->telechargements as $photoUrl) {
                $imageName = time() . '_' . $photoUrl->getClientOriginalName();
                $imagePath = $photoUrl->storeAs('telechargementsProduits', $imageName, 'public');
                array_push($temp, 'storage/' . $imagePath);
            }

            $validatedProduct['attachementsUrl'] = $temp;
        }

        $validatedProduct['slug'] = Str::slug($validatedProduct['name']);
        $validatedProduct['quantiteStock'] = $validatedProduct['quantiteStock'];

        $product->ficheTechnique->update([
            'capacite' => $validatedProduct['capacite'] ? $validatedProduct['capacite'] : null,
            'DWPD' => $validatedProduct['DWPD'] ? $validatedProduct['DWPD'] : null,
            'format' => $validatedProduct['format'] ? $validatedProduct['format'] : null,
            'interfaceInterne' => $validatedProduct['interfaceInterne'] ? $validatedProduct['interfaceInterne'] : null,
            'SerieHDD' => $validatedProduct['SerieHDD'] ? $validatedProduct['SerieHDD'] : null,
            'SMART' => $validatedProduct['SMART'] ? $validatedProduct['SMART'] : null,
            'interfaceDisque' => $validatedProduct['interfaceDisque'] ? $validatedProduct['interfaceDisque'] : null,
            'tempsEntrePannes' => $validatedProduct['tempsEntrePannes'] ? $validatedProduct['tempsEntrePannes'] : null,
            'typeDD' => $validatedProduct['typeDD'] ? $validatedProduct['typeDD'] : null,
            'TBW' => $validatedProduct['TBW'] ? $validatedProduct['TBW'] : null,
            'categorie' => $validatedProduct['categorie'] ? $validatedProduct['categorie'] : null,
            'frequence' => $validatedProduct['frequence'] ? $validatedProduct['frequence'] : null,
            'type' => $validatedProduct['type'] ? $validatedProduct['type'] : null,
            'alimentationDD' => $validatedProduct['alimentationDD'] ? $validatedProduct['alimentationDD'] : null,
            'plateformeCompatible' => $validatedProduct['plateformeCompatible'] ? $validatedProduct['plateformeCompatible'] : null,
            'voltage' => $validatedProduct['voltage'] ? $validatedProduct['voltage'] : null,
            'organisation' => $validatedProduct['organisation'] ? $validatedProduct['organisation'] : null,
            'nbreBaies' => $validatedProduct['nbreBaies'] ? $validatedProduct['nbreBaies'] : null,
            'typeBoitier' => $validatedProduct['typeBoitier'] ? $validatedProduct['typeBoitier'] : null,
            'emplacements_memoire' => $validatedProduct['emplacements_memoire'] ? $validatedProduct['emplacements_memoire'] : null,
            'taille_memoire_base' => $validatedProduct['taille_memoire_base'] ? $validatedProduct['taille_memoire_base'] : null,
            'taille_memoire_max' => $validatedProduct['taille_memoire_max'] ? $validatedProduct['taille_memoire_max'] : null,
            'nbreDD' => $validatedProduct['nbreDD'] ? $validatedProduct['nbreDD'] : null,
        ]);

        $product->telechargement->update([
            'attachementsUrl' => $validatedProduct['attachementsUrl'],
        ]);

        $product->update([
            'name' => $validatedProduct['name'],
            'slug' => $validatedProduct['slug'],
            'price' => $validatedProduct['price'],
            'description' => $validatedProduct['description'],
            'quantiteStock' => $validatedProduct['quantiteStock'],
            'photosUrl' => $validatedProduct['photosUrl'],
            'garantie' => $validatedProduct['garantie'] ? $validatedProduct['garantie'] : 0,
            'dateFinPromo' => $request->garantie ? $request->garantie : 0,
            'ref_fabricant' => $validatedProduct['ref_fabricant'],
            'EAN' => $validatedProduct['EAN'],
            'fiche_technique_id' => $product->ficheTechnique->id,
            'telechargement_id' => $product->telechargement->id,
            'category_id' => $validatedProduct['category_id'],
            'brand_id' => $validatedProduct['marque_id'],
            'annee_production' => $validatedProduct['annee_production'] ? $request->annee_productionn . ' ' . $validatedProduct['annee_production'] : null,
            'famille_id' => $validatedProduct['famille_id'] ? $validatedProduct['famille_id'] : null
        ]);

        return redirect()->route('admin.products.index')->with('status', 'Produit modifié avec succes');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        $product->ficheTechnique->delete();
        $product->telechargement->delete();

        return 'Product' . $product->title . ' deleted';
    }

    public function removeTelechargement(Telechargement $telechargement, $key)
    {
        unset($telechargement->attachementsUrl);
        $telechargement->save();

        return redirect()->back();
    }

    public function removePhoto(Product $product, $key)
    {
        $product->photosUrl = array_splice($product->photosUrl, $key);
        unset($product->photosUrl[$key]);
        $product->save();

        return redirect()->back();
    }
}
