<?php

namespace App\Http\Controllers;

use App\Models\Produit_Commande;
use App\Http\Requests\StoreProduit_CommandeRequest;
use App\Http\Requests\UpdateProduit_CommandeRequest;

class ProduitCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreProduit_CommandeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit_Commande $produit_Commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit_Commande $produit_Commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduit_CommandeRequest $request, Produit_Commande $produit_Commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit_Commande $produit_Commande)
    {
        //
    }
}
