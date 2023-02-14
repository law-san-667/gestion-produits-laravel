<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Produits</title>
    <style>

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
        th {
            text-align: left;
        }

    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->prix }} FCFA</td>
                    <td>{{ $produit->description }}</td>
                    <td>
                        <a href="/form_update/{{$produit->id}}">Edit</a>
                        <a href="/deleteProduit/{{$produit->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>