<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

        return view('back.products.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validatedProduct = $request->validate([
            'name' => 'required', 'max:255',
            'price' => 'numeric',
            'description' => 'required', 'max:255',
            'stock' => 'required', 'min:0',
            'photosUrl' => 'array',
            'categories' => 'array',
            'garantie' => 'min:0',
            'capacite' => 'required', 'max:255',
            'dateFinPromo' => 'after:' . date('Y-m-d'),
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
            'TBW' => 'required', 'integer'
        ]);

        dd($validatedProduct);

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
        $validatedProduct['stock'] = $request->stock;

        $ficheTechnique = FicheTechnique::create([
            'capacite' => $validatedProduct['capacite'],
            'DWPD' => $validatedProduct['DWPD'],
            'format' => $validatedProduct['format'],
            'interfaceInterne' => $validatedProduct['interfaceInterne'],
            'SerieHDD' => $validatedProduct['SerieHDD'],
            'SMART' => $validatedProduct['SMART'],
            'interfaceDisque' => $validatedProduct['interfaceDisque'],
            'tempsEntrePannes' => $validatedProduct['tempsEntrePannes'],
            'typeDD' => $validatedProduct['typeDD'],
            'TBW' => $validatedProduct['TBW']
        ]);

        $telechargement = Telechargement::create([
            'attachementsUrl' => $validatedProduct['attachementsUrl'],
        ]);

        $product = Product::create([
            'nom' => $validatedProduct['name'],
            'slug' => $validatedProduct['slug'],
            'price' => $validatedProduct['price'],
            'description' => $validatedProduct['description'],
            'stock' => $validatedProduct['stock'],
            'photosUrl' => $validatedProduct['photosUrl'],
            'garantie' => $validatedProduct['garantie'],
            'dateFinPromo' => $validatedProduct['dateFinPromo'],
            'ref_fabricant' => $validatedProduct['ref_fabricant'],
            'EAN' => $validatedProduct['EAN'],
            'fiche_technique_id' => $ficheTechnique->id,
            'telechargement' => $telechargement->id
        ]);

        $product->categories->attach($request->categories);

        return redirect()->route('admin.products.index')->with('status', 'Produit cree avec succes');
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function edit(Product $product)
    {
        return view('back.products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validatedProduct = $request->validate([
            'title' => 'required|max:255',
            'price' => 'numeric',
            'description' => 'required|max:255',
            'price' => 'boolean'
        ]);

        $product->name = $validatedProduct['title'];
        $product->description = $validatedProduct['description'];
        $product->price = $validatedProduct['price'];
        $product->sale = $validatedProduct['sale'];
        $product->slug = Str::slug($validatedProduct['title']);

        $product->save();

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return 'Product' . $product->title . ' deleted';
    }

    public function setInStock(Product $product)
    {
        $product->stock = !$product->stock;
        $product->save();

        if ($product->stock) {
            return response()->json(['success' => 'Le produit est maintenant en stock.']);
        } else {
            return response()->json(['success' => "Le produit n'est plus en stock."]);
        }
    }
}
