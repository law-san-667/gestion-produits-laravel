<x-layout>
    <div class="p-10 max-w-lg mx-auto my-24 mx-30 bg-gray-100 border border-gray-200 p-10 rounded">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">INSCRIPTION</h2>
        <p class="mb-4">Inscrivez vous pour pouvoir ajouter des produits !</p>
      </header>
  
      <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
          <label for="name" class="inline-block text-lg mb-2"> Nom</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />
  
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">Email</label>
          <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="password" class="inline-block text-lg mb-2">
            Mot de passe
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
            value="{{old('password')}}" />
  
          @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="password2" class="inline-block text-lg mb-2">
            Confirmez votre mot de passe
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
            value="{{old('password_confirmation')}}" />
  
          @error('password_confirmation')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button type="submit" class="bg-rose-600 text-white rounded py-2 px-4 hover:bg-black">
            S'inscrire
          </button>
        </div>
  
        <div class="mt-8">
          <p>
            Vous avez déjà un compte ?
            <a href="/login" class="text-rose-600">Connectez-vous ici !</a>
          </p>
        </div>
      </form>
    </div>
  </x-layout>