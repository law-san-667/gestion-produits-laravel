<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    
    public function listProduits()
    {
        $produits = Produit::all();
        return view('list_produits', ['produits' => $produits]);
    }

    public function form_add()
    {
        return view('form_add');
    }

    public function addProduit(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->description = $request->description;
        $produit->save();
        return redirect('/listProduits');
    }

    public function updateProduit(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->description = $request->description;
        $produit->save();
        return redirect('/listProduits');
    }

    public function deleteProduit(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect('/listProduits');
    }

    public function form_update($id)
    {
        $produit = Produit::find($id);
        return view('form_add', ['produit' => $produit]);
    }

}
