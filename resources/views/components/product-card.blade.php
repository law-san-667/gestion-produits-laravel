@props(['produit'])
<div style="max-height:591px;" class="bg-white shadow rounded overflow-hidden group">
    <div class="relative">
        <img src="{{ $produit->img ? asset('/storage/'. $produit->img) : asset('/images/no_image_product.png')}}" alt="product" class="">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="/products/{{$produit->id}}"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="view product">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
    </div>
    <div class="pt-4 pb-3 px-4">
        <a href="#">
            <h4 style="text-overflow:ellipsis; display:block; overflow:hidden; white-space:wrap; height: 55px;" class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                {{$produit->nom}}</h4>
        </a>
        <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">{{$produit->prix}} FCFA</p>
            {{-- <p class="text-sm text-gray-400 line-through">$55.90</p> --}}
        </div>
        <p class="h-24 w-full mb-2" style="text-overflow:ellipsis;display:block; overflow:hidden; white-space:wrap">{{$produit->description}}</p>
        <div class="flex items-end">
            <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
        </div>
    </div>
    <a href="/products/{{$produit->id}}"
        class=" items-end block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Consulter</a>
</div>