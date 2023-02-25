<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    // Show all listings
    public function index()
    {
        // Tu peux aussi faire ça comme ça :
        // public function index(Request $request)
        // dd($request);
        // dd(request('tag'));
        return view('products.index', [
            'heading' => 'Produits récents',
            // trie selon l'ancienneté :
            'produits' => Produit::latest()->filter(request(['search']))->simplePaginate(5)
            // 'listings' => Listing::all()
        ]);
    }

    // Show single listings
    public function show(produit $produit)
    {
        $produit->user = User::find($produit->user_id);
        return view('products.show', [
            'produit' => $produit
        ]);
    }

    // Show create form
    public function create()
    {
        return view('products.create');
    }

    // Store gig infos
    public function store(Request $request)
    {
        // Ceci est un magnifique outil crée par ton chéri Laravel pour que tu puisses valider tes forms facilement :
        // dd($request);
        $formFields = $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'user_id' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('imgs', 'public');
        }

        Produit::create($formFields);

        // Ceci ajoute un flash message en redirigeant !
        return redirect('/')->with('message', "Produit créee avec succès !");
    }

    // Show Edit Form
    public function edit(Produit $produit)
    {
        return view('products.edit', ['produit' => $produit]);
    }

    // Update Listing Data
    public function update(Request $request, Produit $produit)
    {
        // Make sure logged in user is owner
        if ($produit->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'user_id' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('imgs', 'public');
        }

        $produit->update($formFields);

        // Ceci ajoute un flash message en redirigeant !
        return back()->with('message', 'Produit modifié avec succès !');
    }

    // Delete Listing
    public function destroy(Produit $produit)
    {
        // Make sure logged in user is owner
        if ($produit->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $produit->delete();
        return redirect('/')->with('message', 'Produit supprimé avec succès');
    }

    // Manage products
    public function manage()
    {
        return view('products.manage', ['produits' => auth()->user()->products()->get()]);
    }
}
