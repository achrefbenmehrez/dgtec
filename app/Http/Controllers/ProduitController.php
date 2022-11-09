<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function index(Category $category, Request $request)
    {
        if ($category) {
            $url = $request->fullUrlWithoutQuery('filters');
            session()->remove('produits');
            if (session()->has('produits')) {
                $produits = session()->get('produits');
            } else {
                $produits = Product::where('category_id', $category->id)->get();
            }

            $produits->load('ficheTechnique');

            if (isset($request->filters['marque'])) {
                $produits = $produits->filter(function ($value, $key) use ($request) {
                    if ($value->brand_id == intval($request->filters['marque'])) {
                        return $value;
                    }
                });
            }

            if (isset($request->filters['capacite'])) {
                $produits = $produits->filter(function ($value, $key) use ($request) {
                    if ($value->ficheTechnique->capacite == intval($request->filters['capacite'])) {
                        return $value;
                    }
                });
            }

            if (isset($request->filters['nbreBaies'])) {
                $produits = $produits->filter(function ($value, $key) use ($request) {
                    if ($value->ficheTechnique->nbreBaies == intval($request->filters['nbreBaies'])) {
                        return $value;
                    }
                });
            }

            if (isset($request->filters['typeBoitier'])) {
                $produits = $produits->filter(function ($value, $key) use ($request) {
                    if ($value->ficheTechnique->typeBoitier == $request->filters['typeBoitier']) {
                        return $value;
                    }
                });
            }

            session()->put('produits', $produits);

            $brands = [];
            foreach ($produits as $produit) {
                $brands[] = $produit->brand;
            }
            $brands = array_unique($brands);

            $capacites = [];
            foreach ($produits as $produit) {
                $capacites[] = $produit->ficheTechnique->capacite;
            }
            $capacites = array_unique($capacites);

            $nbreBaies = [];
            foreach ($produits as $produit) {
                $nbreBaies[] = $produit->ficheTechnique->nbreBaies;
            }
            $nbreBaies = array_unique($nbreBaies);

            return view('produits.index', [
                'produits' => $produits,
                'category' => $category,
                'brands' => $brands,
                'capacites' => $capacites,
                'nbreBaies' => $nbreBaies,
                'url' => $url
            ]);
        } else {
            $url = $request->fullUrlWithoutQuery('filters');
            session()->remove('produits');
            if (session()->has('produits')) {
                $produits = session()->get('produits');
            } else {
                $produits = Product::where('category_id', $category->id)->get();
            }

            $produits->load('ficheTechnique');

            if (isset($request->filters['marque'])) {
                $produits = $produits->filter(function ($value, $key) use ($request) {
                    if ($value->brand_id == intval($request->filters['marque'])) {
                        return $value;
                    }
                });
            }

            if (isset($request->filters['capacite'])) {
                $produits = $produits->filter(function ($value, $key) use ($request) {
                    if ($value->ficheTechnique->capacite == intval($request->filters['capacite'])) {
                        return $value;
                    }
                });
            }

            if (isset($request->filters['nbreBaies'])) {
                $produits = $produits->filter(function ($value, $key) use ($request) {
                    if ($value->ficheTechnique->nbreBaies == intval($request->filters['nbreBaies'])) {
                        return $value;
                    }
                });
            }

            if (isset($request->filters['typeBoitier'])) {
                $produits = $produits->filter(function ($value, $key) use ($request) {
                    if ($value->ficheTechnique->typeBoitier == intval($request->filters['typeBoitier'])) {
                        return $value;
                    }
                });
            }

            session()->put('produits', $produits);

            $brands = [];
            foreach ($produits as $produit) {
                $brands[] = $produit->brand;
            }
            $brands = array_unique($brands);

            $capacites = [];
            foreach ($produits as $produit) {
                $capacites[] = $produit->ficheTechnique->capacite;
            }
            $capacites = array_unique($capacites);

            $nbreBaies = [];
            foreach ($produits as $produit) {
                $nbreBaies[] = $produit->ficheTechnique->nbreBaies;
            }
            $nbreBaies = array_unique($nbreBaies);

            return view('produits.index', [
                'produits' => $produits,
                'brands' => $brands,
                'capacites' => $capacites,
                'nbreBaies' => $nbreBaies,
                'url' => $url
            ]);
        }
    }



    public function show(Product $product)
    {
        $product->load('category', 'ficheTechnique', 'telechargement');

        return view('produits.show', [
            'product' => $product
        ]);
    }

    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => "Le produit n'existe pas"], 404);
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $productId => [
                    "name" => $product->name,
                    "description" => $product->description,
                    "price" => $product->price,
                    "photo" => $product->photosUrl,
                    "stock" => $product->quantiteStock,
                    "slug" => $product->slug,
                    "quantite" => 1
                ]
            ];

            session()->put('cart', $cart);

            if (auth()->check()) {
                Panier::create([
                    'donnees_panier' => $cart,
                    'user_id' => auth()->user()->id
                ]);
            }

            return response()->json(['message' => "Le produit a ete ajouté a votre panier"], 200);
        }

        if (array_key_exists($productId, $cart)) {
            $cart[$productId]['quantite']++;
            session()->put('cart', $cart);

            return response()->json(['message' => "Le produit a ete ajouté a votre panier"], 200);
        } else {
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$productId] = [
                "name" => $product->name,
                "description" => $product->description,
                "price" => $product->price,
                "photo" => $product->photosUrl,
                "stock" => $product->quantiteStock,
                "slug" => $product->slug,
                "quantite" => 1
            ];

            session()->put('cart', $cart);
        }


        if (auth()->check()) {
            $panier = Panier::where('user_id', auth()->user()->id)->get()[0];

            $panier->donnees_panier = $cart;
            $panier->save();
        }

        return response()->json(['message' => "Le produit a ete ajouté a votre panier"], 200);
    }

    public function updateCart(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                $cart[$request->id]['quantite'] = $request->quantite;

                session()->put('cart', $cart);

                if (auth()->check()) {
                    $panier = Panier::where('user_id', auth()->user()->id)->get()[0];

                    $panier->donnees_panier = $cart;
                    $panier->save();
                }
            }

            $total = $this->getCartTotal();

            return response()->json(['msg' => 'Quantite du produit modifiée', 'total' => $total]);
        }
    }

    public function removeFromCart(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);

                if (auth()->check()) {
                    $panier = Panier::where('user_id', auth()->user()->id)->get()[0];

                    $panier->donnees_panier = $cart;
                    $panier->save();
                }
            }

            $total = $this->getCartTotal();

            return response()->json(['msg' => 'Produit supprimée du panier', 'total' => $total]);
        }
    }

    public function clearCart()
    {
        session()->forget('cart');

        if (auth()->check())
            DB::delete('delete from paniers where user_id = ?', [auth()->user()->id]);

        return response()->json(['msg' => 'Cart cleared']);
    }

    /**
     * getCartTotal
     *
     *
     * @return float|int
     */
    public function getCartTotal()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach ($cart as $id => $details) {
            $total += $details['price'];
        }

        return number_format($total, 2);
    }
}
