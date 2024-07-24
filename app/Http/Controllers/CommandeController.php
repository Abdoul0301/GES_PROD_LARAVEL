<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Http\Requests\StoreCommandeRequest;
use App\Http\Requests\UpdateCommandeRequest;
use App\Models\Panier;
use App\Models\Produit_Commande;
use App\Models\Stock;
use App\Models\User;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
        $commandes=Commande::with('client')->get();

            return response()->json($commandes);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' .
                    $e->getMessage(),
                'code' => $e->getCode()
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommandeRequest $request)
    {
        $input=$request->all();


        // Partie 1 : Préfixe fixe pour les commandes
        $prefixe = "CMD";

// Partie 2 : Année actuelle
        $annee = date("Y");

// Partie 3 : Mois actuel
        $mois = date("m");

// Partie 4 : Numéro de commande aléatoire
        $num_commande = rand(1000, 9999);

// Concaténation des parties pour former le matricule de commande
        $matricule_commande = $prefixe . "-" . $annee . $mois . "-" . $num_commande;
        $client=Client::create([
            'nom'=>$input['nom'],
            'adresse'=>$input['adresse'],
            'telephone'=>$input['telephone'],
            'email'=>$input['email'],
        ]);

       $commande= Commande::create([
            'num_commande'=>$matricule_commande,
            'client_id'=>$client->id,
            'montant'=>$input['montant'],
            'statut' =>"encours"
        ]);

        $paniers=Panier::with('produit')->get();
        foreach ($paniers as $panier) {
            Produit_Commande::create([
                'commande_id'=>$commande->id,
                'produit_id'=>$panier->produit_id,
                'quantite'=>$panier->quantite,
            ]);
            $stock=$panier->produit->getstock();
            $newstock=$stock->quantite-$panier->quantite;
            $stock->update(['quantite'=>$newstock]);
//             $client=Client::find($commande->client_id);
//            $client->notify(new \App\Notifications\SendClientnotification($panier->produit));
            $panier->delete();

        }

        return response()->json($commande);

    }

    /**
     * Display the specified resource.
     */
    public function show(String  $id)
    {
        $commande=Commande::with('client')->find($id);
        $commande->load('produits');
        $commande->load('produits.produit');
        return response()->json($commande);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommandeRequest $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
    public function terminer(String $id)
    {
        $commande=Commande::find($id);
        $commande->update(['statut'=>'terminer']);
        return response()->json($commande);
    }
}
