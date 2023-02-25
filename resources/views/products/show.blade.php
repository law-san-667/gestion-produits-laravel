<x-layout>

    @include('partials._search')
    
  <a href="/" class="inline-block text-black ml-4 mb-4"
  ><i class="fa-solid fa-arrow-left"></i> Retour
  </a>
  <div class="mx-40 my-4">
    
<x-card class="p-300">
    <div
    class="flex flex-col items-center justify-center text-center"
    >
    <img
    class="w-48 mb-4"
    src="{{$produit->img ? asset('storage/' . $produit->img) : asset('/images/no_image_product.png')}}" alt=""
    />
          <h3 class="text-2xl mb-2">
              {{$produit->nom}}
            </h3>
            <div class="text-xl font-bold mb-4"><i class="fa-solid fa-tag mr-2"></i>{{$produit->prix}} FCFA</div>
              <div class="text-lg my-4">
                <i class="fa-solid fa-user"></i> {{$produit->user->name}}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
              <h3 class="text-3xl font-bold mb-4">Description du produit</h3>
              <div class="text-lg space-y-6">
                {{$produit->description}}
                
                <a href="mailto:{{$produit->email}}"
                  class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                  class="fa-solid fa-envelope"></i></a>
                  
                  <a href="{{$produit->website}}" target="_blank"
                    class="p-4  bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-phone"></i>
                    Contacter le propriétaire</a>
                  </div>
                </div>
              </div>
              
            </x-card>
  
                <x-card class="mt-4 p-2 flex  items-center space-x-6">
        {{-- <a href="/products/{{$produit->id}}/edit">
          <i class="fa-solid fa-pencil"></i> Modifier
        </a>
        <form method="POST" action="/products/{{$produit->id}}">
          @csrf
          @method('DELETE')
          <button class="text-red-500"><i class="fa-solid fa-trash"></i> Supprimer</button>
        </form> --}}
</x-card>
  
          
</x-layout>