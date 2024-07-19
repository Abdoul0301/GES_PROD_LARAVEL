<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use Exception;
use http\Env\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        try {

            $categories = Categorie::all();
            return response()->json($categories);

        }catch (\Exception $e) {
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
        return view('admin.categories.form',
            [
                'categorie' => new Categorie(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorieRequest $request)
    {
        try {
           $categorie= Categorie::create((new Categorie())->saveImage($request));
            return response()->json($categorie);
        }catch (Exception $e){
            return response()->json([
                'message' => 'Error: ' .
                    $e->getMessage(),
                'code' => $e->getCode()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return response()->json($categorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        try {
            $categorie->update($request->validated());

            return response()->json($categorie);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Error: ' .
                    $e->getMessage(),
                'code' => $e->getCode()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie): RedirectResponse
    {
        try{
            $categorie->delete();
            return redirect()->route('admin.categories.index')
                ->with('success', 'Catégorie supprimée avec succès');
        } catch (Exception $exception) {
            return redirect()->route('admin.categories.index')
                ->with('error', 'Catégorie ne peut pas être supprimée');
        }
    }
    public function filtre(String $id)
    {

        $categories= \App\Models\Categorie::with('produits')->find($id);
        return response()->json($categories);
    }
}
