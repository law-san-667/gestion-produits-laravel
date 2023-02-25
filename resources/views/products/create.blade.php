<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1 text-rose-600">AJOUTER UN PRODUIT</h2>
        <p class="mb-8">Ajoutez vos produits à la foire pour attirer la clientelle !</p>
      </header>
  
      <form method="POST" action="/products" enctype="multipart/form-data">
          {{-- Ce tag permet d'éviter les submit cross platform, c'est plus secure comme ça --}}
        @csrf
        <div class="mb-6">
          <label for="nom" class="inline-block text-lg mb-2">Nom du produit</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="nom"
            value="{{old('nom')}}" />
  
          @error('nom')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="prix" class="inline-block text-lg mb-2">Prix</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full" name="prix"
            placeholder="En FCFA" value="{{old('prix')}}" />
  
          @error('prix')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        
        <div class="mb-6" style="display: none;">
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="user_id"
              placeholder="" value="{{auth()->user()->id}}" />
            @error('user_id')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <label for="img" class="inline-block text-lg mb-2">
            Image
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="img" />
  
          @error('img')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Description du produit
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          {{-- le old que tu vois ici, ça remet l'ancienne valeur quand on submit --}}
            placeholder="Qu'est-ce qui rend votre produit unique dans le marché ? ">{{old('description')}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-rose-600 text-white rounded py-2 px-4 hover:bg-black">
            Ajouter le produit
          </button>
  
          <a href="/" class="text-black ml-4"> Retour </a>
        </div>
      </form>
    </div>
  </x-layout>