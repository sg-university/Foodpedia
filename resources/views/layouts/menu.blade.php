<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FoodPedia</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>

<body style="background:#f5e3c5 !important; ">
    <nav class="navbar navbar-light bg-warning">
        <div class="container">
            @if (Auth::user()->role == 'Admin')
                <a class="navbar-brand" href="/chooseAdmin">Foodpedia</a>
            @else
                <a class="navbar-brand" href="/home">Foodpedia</a>
            @endif
            <a href="/food">
                <button class="btn my-2 my-sm-0 text-white" type="submit">Food</button>
            </a>
            <a href="/ingredient">
                <button class="btn my-2 my-sm-0 text-white" type="submit">Ingredient</button>
            </a>
            <a href="/recommendation">
                <button class="btn my-2 my-sm-0 text-white" type="submit">Recommendation</button>
            </a>
            <a class="btn my-2 my-sm-0 text-white mr-5" type="submit">Hi, {{ Auth::user()->name }}!</a>
            <a href="/logout">
                <button class="btn my-2 my-sm-0 text-white" type="submit">Logout</button>
            </a>
        </div>
    </nav>

    @yield('page-content')






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
