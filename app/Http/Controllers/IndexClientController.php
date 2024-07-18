<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Panier;
use App\Models\Produit;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class IndexClientController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $panier_count = 0;
        $produits = Produit::with('categorie')->get();
        $categories = Categorie::get()->take(4)->toArray();
        if( Auth()->user() != null ) {
            $panier_count = Panier::where('user_id', auth()->user()->id)->count();
        }
        return view('index', compact('produits', 'categories', 'panier_count'));
    }

}
