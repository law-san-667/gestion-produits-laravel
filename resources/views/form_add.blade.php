<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Add</title>
    <style>

        form{
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 0 auto;
        }

        input, textarea{
            margin: 10px 0;
        }

    </style>
</head>
<body>

    <form action={{$produit ?  "/updateProduit/$produit->id" : "/addProduit" }} method="post">
        @csrf
        <input type="text" name="nom" placeholder="Name"  {{$produit ? "value=$produit->nom" : ''}} ><br>
        <input type="number" name="prix" placeholder="Price" {{$produit ? "value=$produit->prix" : ''}}    ><br>
        <textarea name="description"  placeholder="Description..." id="" cols="30" rows="10" > {{$produit ? $produit->description : '' }} </textarea><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>