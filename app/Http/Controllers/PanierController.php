<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Http\Requests\StorePanierRequest;
use App\Http\Requests\UpdatePanierRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paniers=Panier::with('produit')->get();
        return response()->json($paniers);
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
    public function store(StorePanierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Panier $panier)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Panier $panier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePanierRequest $request, Panier $panier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $panier=Panier::find($id);
       $pan= $panier->delete();
        return response()->json($pan);
    }
    public function ajoute(string $id)
    {
        $panier=Panier::create([
            'produit_id' => $id,
            'quantite' => 1
        ]);
        return response()->json($panier);
    }
    public function modifier(Request $request, Panier $panier)
    {
        $quant=$request->get('quantite');
        $panier->update([
            'quantite' => $quant
        ]);
        return redirect()->route('paniers.index');
    }
    public function compte()
    {
        $nbre=Panier::count();
        return response()->json($nbre);

    }
}
