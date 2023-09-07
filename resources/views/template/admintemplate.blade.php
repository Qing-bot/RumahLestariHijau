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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>

    <!-- Header  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/admin"><img src="/gambar/logo_white.jpeg" style="height:50px; width:100%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    @guest
                    <li>
                        <a class="nav-link font-weight-bold text-success" href="/login">Login</a>

                    </li>
                    @endguest

                    @if(Auth::check())
                    <li>
                        <a class="nav-link font-weight-bold text-success" href="/logout" align="center">
                                    {{ __('Logout') }}

                        </a>

                    </li>
                    @endif

                    
                </ul>
            </div>
        </nav>
    </header>

    <br>
    <main style="min-height: 87vh;">
        @yield('content2')
    </main>
    
</body>
</html>
