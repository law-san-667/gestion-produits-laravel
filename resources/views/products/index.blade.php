<x-layout>
    @include('partials._banner')
    <h2 class="text-2xl mt-20 text-center font-medium text-gray-800 uppercase mb-6">
        NOS ARTICLES
      </h2>

    

    {{-- <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"> --}}
    <div class="lg:grid lg:grid-cols-5 gap-4 space-y-4 md:space-y-0 mx-4 mt-24 mb-24">

        {{-- @if(count($listings) == 0)
            <p>No listings found</p>
        @endif --}}
        
        @unless(count($produits) == 0)
        
        @foreach($produits as $produit)
        <x-product-card :produit="$produit"/>
        @endforeach
        
        @else
        <p>
            Aucun produit n'a été trouvé !
        </p>
        @endunless

        
    
    </div>

    <div class="mt-6 p-4">
        {{$produits->links()}}
      </div>

</x-layout>