<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM REGISTER USER</title>
    <!--Css Link  put after title  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
	<!--Script Link  put befor end of </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    <style>
        *{
            text-align: center;
        }
        form{
            width: 30%;
            margin: auto;
        }
        .form-group{
            display: flex;
            flex-direction: column;
            margin: 4px auto;
            width: 100%;
        }
        form, button{
            display: flex;
            flex-direction: column;
            margin: auto;
        }
        input{
            width: 100%;
        }
        button{
            margin-top: 9px;
            width: 50%;
        }
    </style>

</head>
<body>

    
        @if (isset($error))
            <script>
                alert("{{ $error }}");
            </script>  
        @endif
    
        <form action="/register" method="POST">
            @csrf
            <h1>Register</h1>
            <!-- surround groups with div -->
            <div class="form-group" >
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="form-group" >
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="form-group" >
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="form-group" >
                <label for="password_confirmation">Password Confirmation</label>
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary" >Register</button>
        </form>
    
</body>
</html>