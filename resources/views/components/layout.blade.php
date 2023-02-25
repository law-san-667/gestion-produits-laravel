<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LawmineShop | Trouvez & Achetez des produits</title>

    
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>
<script src="https://cdn.tailwindcss.com"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    lawmineshop: "#FD3D57",
                },
            },
        },
    };
</script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- header -->
    <header class="py-4 shadow-sm bg-white">
        <div class="container flex items-center justify-between">
            <a href="/" class="text-2xl">
                <i class="fa-brands  text-4xl text-rose-500 fa-shopify"></i>
                {{-- <img src="assets/images/logo.svg" alt="Logo" class="w-32"> --}}
                LawmineShop
            </a>
            @auth
            <div class="flex items-center space-x-4">
                <a href="/products/manage" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="text-xs leading-3">Mes produits</div>
                    <div
                    style="left: 39px"
                        class="absolute -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                        {{session('nbProduits')}}</div>
                </a>
                <form method="POST" action="/logout" class="text-center text-gray-700 hover:text-primary transition relative">
                    @csrf
                    <div class="text-2xl">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <button type="submit" class="text-xs leading-3">
                            Déconnexion
                    </button>
                </form>
            </div>
            @else
            <div class="flex items-center space-x-4">
                <a href="/login" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">
                            Connexion
                    </div>
                </a>
            </div>
            @endauth
        </div>
    </header>
    <!-- ./header -->

    <!-- navbar -->
    <nav class="bg-gray-800">
        <div class="container flex">
            <div class="px-8 py-4 bg-primary flex items-center cursor-pointer relative group">
                <span class="text-white">
                    <i class="fa-solid fa-bars"></i>
                </span>
                <span class="capitalize ml-2 text-white">Catégories</span>

                <!-- dropdown -->
                <div
                    class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="assets/images/icons/sofa.svg" alt="sofa" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="assets/images/icons/terrace.svg" alt="terrace" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Terarce</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="assets/images/icons/bed.svg" alt="bed" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Bed</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="assets/images/icons/office.svg" alt="office" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">office</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="assets/images/icons/outdoor-cafe.svg" alt="outdoor" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="assets/images/icons/bed-2.svg" alt="Mattress" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Mattress</span>
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="/" class="text-gray-200 hover:text-white transition">Accueil</a>
                    <a href="pages/shop.html" class="text-gray-200 hover:text-white transition">Achat</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">À propos</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">Nous contacter</a>
                </div>
                @auth
                <p class="text-gray-200 hover:text-white transition">Bienvenue, {{auth()->user()->name}}</p>
                @else
                <a href="/register" class="text-gray-200 hover:text-white transition">S'inscrire</a>
                @endauth
            </div>
        </div>
    </nav>
    <!-- ./navbar -->
    <main>
        {{$slot}}
    </main>

        <!-- footer -->
        <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
            <div class="container grid grid-cols-3">
                <div class="col-span-1 space-y-8">
                    <span class="flex items-center text-2xl h-30">
                        <img src="{{asset('/images/favicon.png')}}" alt="logo" class="w-10 pr-2">
                        LawmineShop
                    </span>
                    <div class="mr-2">
                        <p class="text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, hic?
                        </p>
                    </div>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="fa-brands fa-facebook-square"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="fa-brands fa-instagram-square"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="fa-brands fa-twitter-square"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fa-brands fa-github-square"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-span-2 grid grid-cols-2 gap-8">
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Analyses</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Commerce</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Perspectives</a>
                            </div>
                        </div>
    
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Prix</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Statut API</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Analyses</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Commerce</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Perspectives</a>
                            </div>
                        </div>
    
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Prix</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Statut API</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ./footer -->
    
        <!-- copyright -->
        <div
    class="fixed bottom-0 left-0 w-full flex items-center justify-start space-x-40 font-bold bg-gray-800 text-white h-20 mt-24 opacity-90 md:justify-center"
>
    <p class="ml-2 ">Copyright &copy; 2022, All Rights reserved</p>
    <div>
        <img src="{{asset('/images/methods.png')}}" alt="methods" class="h-5">
    </div>
    <a
        href="/products/create"
        class=" bg-black text-white py-2 px-5"
        >Ajouter un produit</a
    >
</div>
        <!-- ./copyright -->
        <x-flash-message/>
    </body>
    

    </html>