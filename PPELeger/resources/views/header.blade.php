<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        $(document).ready(function($) {
            $(".table-row").click(function() {
                window.document.location = $(this).data("href");
            });
        });
    </script>

    <style>
        body {
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 50px;
        }
        table {
            text-align: center;
        }

        #topBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: rgb(250,250,250);
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 15px; /* Some padding */
            border-radius: 50%; /* Rounded corners */
            font-size: 18px; /* Increase font size */
            height: 70px;
            width: 70px;
        }
    </style>
    <title>Client Léger</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
              
            <ul class="nav col-16 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href={{route('welcome')}} class="nav-link px-16 link-secondary">Home Page</a></li>
                <li><a href={{route('clients')}} class="nav-link px-16 link-dark">Clients</a></li>
                <li><a href={{route('commandes')}} class="nav-link px-16 link-dark">Commandes</a></li>
                <li><a href={{route('medecins')}} class="nav-link px-16 link-dark">Médecins</a></li>
                <li><a href={{route('medicaments')}} class="nav-link px-16 link-dark">Médicaments</a></li>
                <li><a href={{route('pharmacies')}} class="nav-link px-16 link-dark">Pharmacies</a></li>
                <li><a href={{route('pharmaciens')}} class="nav-link px-16 link-dark">Pharmaciens</a></li>
                <li><a href={{route('productions')}} class="nav-link px-16 link-dark">Production</a></li>
                <li><a href={{route('stocks')}} class="nav-link px-16 link-dark">Stocks</a></li>
            </ul>
            @if (Route::has('login'))
            <div class="col-md-3 text-end">
                @auth
                        <a href="{{ url('/dashboard') }}"><button type="button" class="btn btn-outline-primary">Dashboard</button></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                            <button type="button" class="btn btn-outline-primary">Log in</button>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                                <button type="button" class="btn btn-outline-primary">Register</button>
                            </a>
                        @endif
                @endauth
            </div>
            @endif
        </header>
    </div>