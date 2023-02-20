<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;

class ProduitController extends Controller
{

    public function index()
    {
        header('Location: localhost:80000/listProduits');
    }
    
    public function listProduits()
    {
        $produits = Produit::all();
        foreach($produits as $produit){
            $produit->user = User::find($produit->user_id);
        }
        return view('list_produits', ['produits' => $produits]);
    }

    public function form_add()
    {
        if(session('user') == null)
            return redirect('/form_login?error=You must be logged in to add a product !');
        return view('form_add', ['produit' => null]);
    }

    public function addProduit(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->description = $request->description;
        $produit->user_id = session('user');
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


    public function details_produit($id)
    {
        $produit = Produit::find($id);
        $produit->user = User::find($produit->user_id);
        return view('details', ['produit' => $produit]);
    }

}
