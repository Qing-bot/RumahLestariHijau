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
                    <li class="nav-item active">
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

                    <li class="nav-item ">
                        <a class="nav-link font-weight-bold text-success" href="#footer">Contact&nbsp;Us</a>
                    </li>

                    @guest
                    <li>
                        <a class="nav-link font-weight-bold text-success" href="/login">Login</a>
                    </li>
                    @endguest

                    @if(Auth::check())
                        <li class="nav-item dropdown" align="center">
                            <a class="nav-link font-weight-bold text-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Welcome&nbsp;{{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link font-weight-bold text-success" href="/profile" align="center">Profile</a>

                                @if(Auth::user()->isAdmin == true)
                                <a class="nav-link font-weight-bold text-success" href="/admin" align="center">Admin Table</a>
                                @endif
                                
                                <a class="nav-link font-weight-bold text-success" href="/logout" align="center">
                                    {{ __('Logout') }}

                                </a>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer  -->
    <footer style="background: linear-gradient(rgb(42 180 70), rgb(98 180 38))" id="footer">
        <div style="max-width: 100%; margin: auto; display: flex">
                <ul>
                <li style="list-style: none;">
                    <div style="font-size: 100%; margin-bottom: 1%; margin-top: 5%; margin-left:8%;">
                        <b>
                        Office Address
                        </b>
                    </div>
                    <p style="color: white; margin-left:8%; margin-right:40%;">
                    <img src="/gambar/location-pointer.png" style="width: 5%;">
                        Pulau Pramuka, Pulau Panggang, Kepulauan Seribu Utara, Kab. Administrasi Kepulauan Seribu, Daerah Khusus Ibukota Jakarta 14530
                    </p>
                </li>

                <li style="list-style: none;">
                    <div style="font-size: 100%; margin-bottom: 1%; margin-top: -1%; margin-left:8%;">
                        <b>
                        Email
                        </b>
                    </div>
                    <p style="color: white; margin-left:8%;">
                    <img src="/gambar/email.png" style="width: 3%;">
                    rumahliterasihijau@gmail.com
                    </p>
                </li>

                <li style="list-style: none;">
                    <div style="font-size: 100%; margin-bottom: 1%; margin-top: -1%; margin-left:8%;">
                        <b>
                        Contact Person
                        </b>
                    </div>
                    <p style="color: white; margin-left:8%;">
                    <img src="/gambar/phone-receiver-silhouette.png" style="width: 3%">
                        081202938495
                    </p>
                </li>
            </ul>

            <ul>
                <li style="list-style: none;">
                    <P style="margin-bottom: 1%; margin-top: 15%; color: white; text-align: center; margin-right:35%;">
                        <b>
                            SIGN UP AND SAVE
                        </b>
                    </P>
                </li>

                <li style="list-style: none;">
                    <P style="margin-bottom: 1%; margin-top: 1.5%; color: white; text-align: left; margin-right:25%;">
                        Subscribe to get special offers, free giveaway, and once in a lifetime deals
                    </P>
                </li>

                <div style="width: 100%; margin-top: 4%;">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" style="float: left; width: 45%; background: #094222; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                    <button type="submit" class="btn btn-primary mb-2" style="clear: both; width: 25%; background: linear-gradient(to right, #f0572e, #f0312e); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">Subscribe</button>
                </div>
            </ul>

            <ul>
                <div class="rounded-social-buttons col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <a class="social-button whatsapp" href="https://api.whatsapp.com/send/?phone=6281202938495&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a class="social-button facebook" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                </div>
            </ul>
        </div>

        <p style="color: white; border-top: 1% solid; text-align: center; margin-bottom:0;">
            ©2022 Powered by Rumah Lestari Hijau. All Right Reserved.
        </p>
    <footer>
</body>
</html>

