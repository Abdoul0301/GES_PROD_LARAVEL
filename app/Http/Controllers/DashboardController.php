<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
use App\Notifications\ExpirationMessage;
use App\Notifications\ExpirationSoonMessage;
use Auth;
use DateInterval;
use DateTime;


class DashboardController extends Controller
{

    public function index()
    {
        $produit_count = Produit::count();
        $commandes_count = Commande::count();
        $commandes_terminer = Commande::where('statut', 'terminer')->count();
        $produits=Produit::all();
        $stock_total = 0;
        foreach ($produits as $produit) {
            $produit->load('stock');

            foreach ($produit->stock as $stock) {
                $stock_total += $stock->quantite;
            }

        }


        return response()->json(['produit_count' => $produit_count,
            'commandes_count' => $commandes_count,
            'commandes_terminer' => $commandes_terminer,
            'stock_total' => $stock_total]);
    }

    public function expirationAlert(): void
    {
        if (auth()->check()) {
            $user = User::find(Auth::user()->id);
            $produits = $user->produits;
            foreach ($produits as $produit) {
                if ($produit->date_exp < date('y-m-d')){
                    $user->notify(new ExpirationMessage($produit));
                }
            }
        }
    }

    public function soonExpirationAlert(): void
    {
        // envoyer une notification 1 semaine avant l'expiration du produit
            $now = new DateTime();
            $interval = new DateInterval('P7D');
            $date = $now->add($interval);
            $produits = Produit::whereDate('date_exp', '<', $date)->get();
            foreach ($produits as $produit) {
                $user = User::find($produit->user_id);
                $user->notify(new ExpirationSoonMessage($produit));
                $newprix=$produit->prix-($produit->prix*0.2);
                $produit->update(['nouveau_prix' => $newprix]);
            }
    }

}
