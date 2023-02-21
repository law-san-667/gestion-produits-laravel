<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
	<!--Script Link  put befor end of </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>

        *{
            text-align: center;
        }
        table{
            width: 80%;
            margin: 100px auto;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            width: 20%;
        }
        th {
            text-align: left;
        }
        table tr:nth-child(even) {
            background-color: #eee;
        }
        table tr:nth-child(odd) {
            background-color: #fff;
        }
        table th {
            background-color: black;
            color: white;
        }
        th, td {
            text-align: center;
        }

        a{
            text-decoration: none;
            color: black;
            font-style: italic;
            text-decoration: underline;
        }
        .add{
            padding: 5px;
            border-radius: 5px;
            color: black;
        }

        .btn{
            margin-top: 10px;
        }



    </style>
</head>
<body>

    <!-- if session variable definded display logout btn else display login button -->
    @if (session('user'))
        <button class="btn btn-danger" >
            <a href="/logout">Log Out</a>
        </button>
    @else
        <button class="btn btn-primary" >
            <a href="/form_login">Log In</a>
        </button>
    @endif
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Added By</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($produits->isEmpty())
                <tr>
                    <td colspan="4">No data...</td>
                </tr>
            @else
                @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->prix }} FCFA</td>
                    <td>{{ $produit->user->name }}</td>
                    <td>
                        @if (session('user') == $produit->user->id)
                            <a href="/form_update/{{$produit->id}}" class="edit" >Edit</a><br>
                            <a href="/deleteProduit/{{$produit->id}}" class="delete" >Delete</a><br>
                            @endif
                        <a href="/details_produit/{{$produit->id}}">voir plus...</a>
                    </td>
                </tr>
                @endforeach
            @endif
            <tr>
                <td colspan="4">
                    <a href="/form_add  " class="add" >Add...</a>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>