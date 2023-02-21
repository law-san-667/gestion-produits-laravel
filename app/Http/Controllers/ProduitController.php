<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;

class ProduitController extends Controller
{    
    public function index()
    {
        $produits = Produit::all();
        foreach($produits as $produit){
            $produit->user = User::find($produit->user_id);
        }
        return view('list_produits', ['produits' => $produits]);
    }

    public function create()
    {
        if(session('user') == null)
            return redirect('/form_login?error=You must be logged in to add a product !');
        return view('form_add', ['produit' => null]);
    }

    public function store(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->description = $request->description;
        $produit->user_id = session('user');
        $produit->save();
        return redirect('/listProduits');
    }

    public function update(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->description = $request->description;
        $produit->save();
        return redirect('/listProduits');
    }

    public function destroy(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect('/listProduits');
    }

    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('form_add', ['produit' => $produit]);
    }


    public function show($id)
    {
        $produit = Produit::find($id);
        $produit->user = User::find($produit->user_id);
        return view('details', ['produit' => $produit]);
    }

}
