<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETAILS OF PRODUCT</title>
</head>
<body>

    <h1>DETAILS OF PRODUCT</h1>
    <h2>{{$produit->nom}}</h2>
    <h3>{{$produit->prix}}</h3>
    <p>{{$produit->description}}</p>
    @if( $produit->user->id == session('user'))
        <a href="/formAdd/{{$produit->id}}">Edit</a>
        <a href="/deleteProduit/{{$produit->id}}">Delete</a>    
    @endif
    <a href="/listProduits">Back</a>
    
</body>
</html>