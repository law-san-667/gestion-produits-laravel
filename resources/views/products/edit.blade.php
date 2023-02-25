<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">MODIFIER LE PRODUIT</h2>
        <p class="mb-4">{{$produit->nom}}</p>
      </header>
  
      <form method="POST" action="/products/{{$produit->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label for="nom" class="inline-block text-lg mb-2">Nom du produit</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="nom"
            value="{{$produit->nom}}" />
  
          @error('nom')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6" style="display: none;">
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="user_id"
              placeholder="" value="{{$produit->user_id}}" />
            @error('user_id')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

  
  
        <div class="mb-6">
          <label for="prix" class="inline-block text-lg mb-2">Prix</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full" name="prix"
            placeholder="En FCFA" value="{{$produit->prix}}" />
  
          @error('prix')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
    
        <div class="mb-6">
          <label for="img" class="inline-block text-lg mb-2">
            Image
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="img" />
  
          <img class="w-48 mr-6 mb-6"
            src="{{$produit->img ? asset('storage/' . $produit->img) : asset('/images/no_image_product.png')}}" alt="" />
  
          @error('img')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Description
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="Include tasks, requirements, salary, etc">{{$produit->description}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-rose-600 text-white rounded py-2 px-4 hover:bg-black">
            Modifier
          </button>
  
          <a href="/" class="text-black ml-4"> Retour </a>
        </div>
      </form>
    </x-card>
  </x-layout>
  