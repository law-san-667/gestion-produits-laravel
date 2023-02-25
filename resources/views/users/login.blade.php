<x-layout>
    <div class="p-10 max-w-lg mx-auto my-24 mx-30 bg-gray-100 border border-gray-200 p-10 rounded">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">CONNEXION</h2>
        <p class="mb-4">Connectez-vous pour pouvoir ajouter des produits</p>
      </header>
  
      <form method="POST" action="/users/authenticate">
        @csrf
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">Email</label>
          <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="password" class="inline-block text-lg mb-2">
            Password
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
            value="{{old('password')}}" />
  
          @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button type="submit" class="bg-rose-600 text-white rounded py-2 px-4 hover:bg-black">
            CONNEXION
          </button>
        </div>
  
        <div class="mt-8">
          <p>
            Pas de compte ?
            <a href="/register" class="text-rose-600">Inscrivez-vous</a>
          </p>
        </div>
      </form>
    </div>
  </x-layout>