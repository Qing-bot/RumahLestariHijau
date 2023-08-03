<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/style1.css">
    <link rel="stylesheet" type="text/css" href="/boostrap.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</head>
<body>

    <!-- Header  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><img src="/gambar/logo_white.jpeg" style="height:50px; width:100%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active" style="margin-left:-6%">
                        <a class="nav-link font-weight-bold text-success" href="/"> Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item font-weight-bold">
                        <a class="nav-link font-weight-bold text-success" href="/homestay"> Homestay</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-success" href="/culinary">Culinary</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-success" href="/destination">Destination</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-success" href="/souvenir">Souvenir</a>
                    </li>

                    <li class="nav-item" >
                        <a class="nav-link font-weight-bold text-success" href="/promo">Promo</a>
                    </li>

                    <li class="nav-item " align="center">
                        <a class="nav-link font-weight-bold text-success" href="#footer">Contact&nbsp;Us</a>
                    </li>

                    @guest
                    <li>
                        <a class="nav-link font-weight-bold text-success" href="/login">Login</a>
                    </li>
                    @endguest

                    @if(Auth::check())
                
                        @if(Auth::user()->isAdmin == true)
                        <li class="nav-item dropdown" align="center">
                            <a class="nav-link font-weight-bold text-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Welcome&nbsp;Admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item font-weight-bold text-success" href="/admin" align="center">Admin Table</a>

                                <a class="nav-link font-weight-bold text-success" href="/logout" align="center">
                                    {{ __('Logout') }}

                                </a>
                            </div>
                        </li>

                        @else
                            <a class="nav-link font-weight-bold text-success" href="/logout">
                                {{ __('Logout') }}
                            </a>
                        @endif

                    @endif
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>

