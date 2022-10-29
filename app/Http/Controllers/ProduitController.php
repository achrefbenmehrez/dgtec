<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(Category $category)
    {
        $produits = $category->products;

        return view('produits.index', [
            'produits' => $produits,
            'category' => $category
        ]);
    }

    public function show(Category $category, Product $product)
    {
        $product->load('category', 'brand', 'ficheTechnique', 'telechargement');

        return view('produits.show', [
            'product' => $product,
            'category' => $category
        ]);
    }

    public function cart()
    {
        return view('front.payement.payement');
    }
    public function addToCart(Product $product)
    {
        $id = $product->id;

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "nom" => $product->nom,
                    "description" => $product->description,
                    "prix" => $product->prix,
                    "photo" => $product->photosUrl,
                    "stock" => $product->quantiteStock
                ]
            ];

            session()->put('cart', $cart);

            if (auth()->check()) {
                Panier::create([
                    'donnees_panier' => $cart,
                    'user_id' => auth()->user()->id
                ]);
            }

            return redirect()->back()->with('status', 'Formation ajoutée au panier');
        }


        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "nom" => $product->nom,
            "description" => $product->description,
            "prix" => $product->prix,
            "photo" => $product->photosUrl,
            "stock" => $product->quantiteStock
        ];

        session()->put('cart', $cart);

        if (auth()->check()) {
            $panier = Panier::where('user_id', auth()->user()->id)->get()[0];

            $panier->donnees_panier = $cart;
            $panier->save();
        }

        return redirect()->back()->with('status', 'Produit ajoutée au panier');
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

    /**
     * getCartTotal
     *
     *
     * @return float|int
     */
    private function getCartTotal()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach ($cart as $id => $details) {
            $total += $details['prix'];
        }

        return number_format($total, 2);
    }
}
