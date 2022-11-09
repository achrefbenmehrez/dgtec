<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Famille;
use App\Models\FicheTechnique;
use App\Models\Machine;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $promos = Product::whereNotNull('dateFinPromo');
        $homePromos = $promos->take(4)->get();

        $nouveautes = Product::latest();
        $homeNouveautes = $nouveautes->take(4)->get();

        return view('index', [
            'promosCount' => $promos->count(),
            'homePromos' => $homePromos,
            'nouveautesCount' => $nouveautes->count(),
            'homeNouveautes' => $homeNouveautes
        ]);
    }

    public function selecteurApple()
    {
        return view("selecteur-de-memoire-apple");
    }

    public function selecteurMemoire()
    {
        $machine = Machine::all();

        return view("selecteur-de-memoire", [
            'machines' => $machine
        ]);
    }

    public function configurateurNas()
    {
        $countRacks = FicheTechnique::where('typeBoitier', "Rack")->count();
        $countTour = FicheTechnique::where('typeBoitier', "Tour")->count();

        return view("configurateur-de-nas", [
            'countRacks' => $countRacks,
            'countTour' => $countTour
        ]);
    }

    public function selecteurNas()
    {
        $countRacks = FicheTechnique::where('typeBoitier', "Rack")->count();
        $countTour = FicheTechnique::where('typeBoitier', "Tour")->count();

        $minCapacite = FicheTechnique::min('capacite');
        $maxCapacite = FicheTechnique::max('capacite');

        return view("selecteur-de-nas", [
            'countRacks' => $countRacks,
            'countTour' => $countTour,
            'minCapacite' => $minCapacite,
            'maxCapacite' => $maxCapacite
        ]);
    }

    public function comparateurRaid()
    {
        return view("comparateur-de-raid");
    }

    public function search(Request $request)
    {
        $query = $request->searchQuery;
        $produits = Product::query()
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        return view('produits.index', [
            'produits' => $produits,
            'query' => $query
        ]);
    }

    public function getFabricants(Request $request)
    {
        $machine = Machine::find($request->machine_id);
        $fabricants = $machine->fabricants;

        return response()->json(['fabricants' => $fabricants]);
    }

    public function getFamilles(Request $request)
    {
        $familles = Famille::where('fabricant_id', $request->fabricant_id)->get();

        return response()->json(['familles' => $familles]);
    }

    public function getProducts()
    {
        $products = Product::where('famille_id', request('famille_id'))->get();

        return response()->json(['products' => $products]);
    }

    public function getProduct(Request $request)
    {
        $product = Product::where("id", $request->product_id)->get()[0];
        $nomFamille = $product->famille->name;
        $emplacements_memoire = $product->ficheTechnique->emplacements_memoire;
        $taille_memoire_base = $product->ficheTechnique->taille_memoire_base;
        $taille_memoire_max = $product->ficheTechnique->taille_memoire_max;

        return response()->json(['product' => $product, 'nomFamille' => $nomFamille, 'emplacements_memoire' => $emplacements_memoire, 'taille_memoire_base' => $taille_memoire_base, 'taille_memoire_max' => $taille_memoire_max]);
    }

    public function getAnneesProd(Request $request)
    {
        $brand = Brand::where('title', 'Apple')->get()->first();
        $anneesProd = Product::select('annee_production')->where('name', 'LIKE', "%{$request->name}%")->where('brand_id', $brand->id)->get();

        return response()->json(['annee_production' => $anneesProd]);
    }

    public function getProductsParAnneeProd(Request $request)
    {
        $famille = Famille::where('name', $request->nomFamille)->get()->first();
        $products = Product::where('annee_production', $request->anneeProd)->where('famille_id', $famille->id)->get();

        return response()->json(['products' => $products]);
    }

    public function getProductsByCapacite(Request $request)
    {
        $fichesTechniques = FicheTechnique::where('capacite', '>=', ($request->min / $request->emplacements))->orWhere('capacite', '<=', ($request->max / $request->emplacements))->get()->load("product");

        $products = array();

        foreach ($fichesTechniques as $ficheTechnique) {
            array_push($products, [$ficheTechnique, $ficheTechnique->product]);
        }

        return response()->json(['products' => $products]);
    }

    public function getProductsByTypeBoitier(Request $request)
    {
        $fichesTechniques = FicheTechnique::where('typeBoitier', '=', $request->typeBoitier)->get();

        $products = array();

        foreach ($fichesTechniques as $ficheTechnique) {
            array_push($products, [$ficheTechnique, $ficheTechnique->product]);
        }

        return response()->json(['products' => $products]);
    }

    public function getProductsByNbreBaies(Request $request)
    {
        $fichesTechniques = FicheTechnique::where('nbreBaies', '=', $request->nbreBaies)->where('typeBoitier', $request->typeBoitier)->get();

        $products = array();

        foreach ($fichesTechniques as $ficheTechnique) {
            array_push($products, $ficheTechnique);
        }

        return response()->json(['products' => $products]);
    }

    public function getProductsByTypeDD(Request $request)
    {
        $fichesTechniques = FicheTechnique::where('typeDD', $request->typeDD)->where('nbreBaies', $request->nbreBaies)->where('typeBoitier', $request->typeBoitier)->get();


        $brands = array();

        foreach ($fichesTechniques as $ficheTechnique) {
            array_push($brands, $ficheTechnique->product->brand);
        }

        return response()->json(['brands' => $brands]);
    }

    public function getProductsByTypeDDNbDD(Request $request)
    {
        $fichesTechniques = FicheTechnique::where('typeDD', $request->typeDD)->where('nbreDD', $request->nbreDD)->get();


        $brands = array();

        foreach ($fichesTechniques as $ficheTechnique) {
            array_push($brands, $ficheTechnique->product->brand);
        }

        return response()->json(['brands' => $brands]);
    }

    public function getNbresBaies(Request $request)
    {
        $nbresBaies = FicheTechnique::select('nbreBaies')->where('typeBoitier', $request->typeBoitier)->distinct()->get();

        return response()->json(['nbresBaies' => $nbresBaies]);
    }

    public function getProductsByCapaciteInterval(Request $request)
    {
        $products = FicheTechnique::where('capacite', '>=', $request->min)->where('capacite', '<=', $request->max)->get();

        return response()->json(['products' => $products]);
    }

    public function getProductsByNbreDD(Request $request)
    {
        $products = FicheTechnique::where('nbreDD', $request->nbreDD)->get();

        return response()->json(['products' => $products]);
    }

    public function getProductsByMarqueDD(Request $request)
    {
        $brand = Brand::where('title', $request->marqueDD)->with("products")->get()->first();
        $products = $brand->products;

        return response()->json(['products' => $products, 'brand' => $brand]);
    }

    public function getProductsByMarqueTypeNbre(Request $request)
    {
        $brand = Brand::where('title', $request->marqueDD)
            ->whereHas('products', function ($query) use ($request) {
                $query->whereHas('ficheTechnique', function ($query) use ($request) {
                    $query->where('nbreDD', $request->nbreDD)->where('typeDD', $request->typeDD);
                });
            })->with("products")->get()->first();
        $products = $brand->products;

        return response()->json(['products' => $products, 'brand' => $brand]);
    }
}
