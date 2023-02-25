<x-layout>
    <div class="container pb-16 my-24">
    
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">
          VOS PRODUITS
        </h2>

        @unless(count($produits) == 0)

        
        <div class="lg:grid lg:grid-cols-5 gap-4 space-y-4 md:space-y-0 mx-4 mt-24 mb-24">
        @foreach($produits as $produit)

            <div style="max-height: 591px;"  class="bg-white shadow rounded overflow-hidden group">
            
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                  <img
                    src="{{ $produit->img ? asset('/storage/'. $produit->img) : asset('/images/no_image_product.png')}}"
                    alt="product"
                    class="w-full"
                  />
                  <div
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition"
                  >
                    <a
                      href="/products/{{$produit->id}}"
                      class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                      title="view product"
                    >
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                  </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                  <a href="#">
                    <h4
                    style="text-overflow:ellipsis; display:block; overflow:hidden; white-space:wrap; height: 55px;"
                      class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition"
                    >
                      {{$produit->nom}}
                    </h4>
                  </a>
                  <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl text-primary font-semibold">{{$produit->prix}} FCFA</p>
                  </div>
                  <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
                <p style="text-overflow:ellipsis; display:block; overflow:hidden; white-space:wrap; height:100px;" class="my-2">
                    {{$produit->description}}
                </p>
                </div>
                <a
                  href="/products/{{$produit->id}}/edit"
                   style="background: rgb(0,123,255);"
                  class="block w-full py-1 text-center  text-white hover:bg-transparent transition"
                  ><i class="fa-solid fa-pencil"></i>  Modifier</a
                >
                <form method="POST" 
                class="block w-full py-1 text-center text-white rounded-b hover:bg-transparent hover:text-success transition"
                style=" cursor:pointer; background: #D9544F;"
                action="/products/{{$produit->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-white"><i class="fa-solid fa-trash"></i> Supprimer</button>
                  </form>
              </div>

        </div>
        @endforeach
            
        @else
        <p>
            Aucun produit n'a été trouvé !
        </p>
        @endunless

    </div>
      <!-- ./new arrival -->
</x-layout>