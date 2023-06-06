@extends('template.template')

@section('title', 'Home - Rumah Hijau')

@section('content')

<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto -->

<style>
    #carousel {
      overflow: hidden;
      white-space: nowrap;
      background: linear-gradient(to right, green, lime);
      padding-top: 2%;
      padding-bottom: 3%;
    }

    .slide {
      display: inline-block;
      width: 100%;
      height: 300px;
    }

    #prev, #next {
      background: #333;
      color: #fff;
      border: none;
      border-radius: 100%;
      padding: 10px 20px;
      cursor: pointer;
    }

    #indicators {
      display: flex;
      justify-content: center;
      margin: 20px 0;
    }

    .indicator {
      width: 15px;
      height: 15px;
      background: #ddd;
      border-radius: 50%;
      margin: 0 5px;
      cursor: pointer;
    }

    .indicator.active {
      background: #333;
    }

    .homeSeeAllPromo{
        color: white;
        float: left;
        font-weight: bold;
    }

    .homeSeeAllPromo:hover{
        text-decoration: none;
        color: black;
    }

    .homeArrow{
        color: white;
        border: 1px solid white;
        border-radius: 100%;
        padding: 5%
    }
    .homeArrow:hover{
        color: black;
        border: 1px solid black;
        border-radius: 100%;
        padding: 5%
    }
  </style>

<!-- Promo Start -->

<!-- Promo End -->

    <!-- Home 2 Start -->
    <div>
        <div>
            <ul>
                <li style="list-style: none; padding: 25px">

                </li>

                <li style="list-style: none; padding: 25px">

                </li>
            </ul>
        </div>
    </div>


    {{-- Carousel Start --}}
    <div id="carousel" style="margin-top: -10%; margin-bottom: 8%">
        @foreach ($pr as $promo)
        <div class="slidePromo"><a href="#"><img src="{{Storage::url($promo->photo)}}" class="homeImage"></a></div>

        @endforeach
        {{-- <div class="slidePromo"><a href="#"><img src="gambar/contohgambar2.png" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar3.jpg" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar.png" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar2.png" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar3.jpg" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar.png" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar2.png" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar3.jpg" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar.png" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar2.png" class="homeImage"></a></div>
        <div class="slidePromo"><a href="#"><img src="gambar/contohgambar3.jpg" class="homeImage"></a></div>
        <div class="slidePromo" style="width: 0%"></div> --}}

        <div style="position: absolute; margin-left: 45%">
            <button id="prev" style="float: left; font-size:50%; background-color: rgba(255, 255, 255, 0)"><div class="homeArrow" style="border: 1px solid white; border-radius: 100%; padding: 5%"><i class="fa fa-arrow-left" style="font-size: 150%"></i></div></button>
            <a class="homeSeeAllPromo" href="http://localhost:8000/promo">See All Promo</a>
            <button id="next" style="float: left; font-size:50%; background-color: rgba(255, 255, 255, 0)"><div class="homeArrow" style="border: 1px solid white; border-radius: 100%; padding: 5%"><i class="fa fa-arrow-right" style="font-size: 150%"></i></div></button>
        </div>
    </div>

    <script>

        const carousel = document.querySelector('#carousel');
        const indicators = document.querySelectorAll('.indicator');
        let currentSlide = 0;

        function updateIndicators() {
          indicators.forEach((indicator) => indicator.classList.remove('active'));
          indicators[currentSlide].classList.add('active');
        }

        carousel.addEventListener('scroll', () => {
          currentSlide = Math.round(carousel.scrollLeft / carousel.offsetWidth);
          updateIndicators();
        });

        indicators.forEach((indicator, index) => {
          indicator.addEventListener('click', () => {
            carousel.scrollLeft = index * carousel.offsetWidth;
            currentSlide = index;
            updateIndicators();
          });
        });
        const prevButton = document.querySelector('#prev');
        const nextButton = document.querySelector('#next');
        let isDown = false;
        let startX;
        let scrollLeft;

        carousel.addEventListener('mousedown', (e) => {
          isDown = true;
          carousel.classList.add('active');
          startX = e.pageX - carousel.offsetLeft;
          scrollLeft = carousel.scrollLeft;
        });
        carousel.addEventListener('mouseleave', () => {
          isDown = false;
          carousel.classList.remove('active');
        });
        carousel.addEventListener('mouseup', () => {
          isDown = false;
          carousel.classList.remove('active');
        });
        carousel.addEventListener('mousemove', (e) => {
          if(!isDown) return;
          e.preventDefault();
          const x = e.pageX - carousel.offsetLeft;
          const walk = (x - startX) * 3;
          carousel.scrollLeft = scrollLeft - walk;
        });

        prevButton.addEventListener('click', () => {
          carousel.scrollLeft -= carousel.offsetWidth;
        });

        nextButton.addEventListener('click', () => {
          carousel.scrollLeft += carousel.offsetWidth;
        });
      </script>

    {{-- Carousel End --}}



    <!-- Visit Destination Start AKA EXPLORE THE THOUSAND ISLAND -->
    <div>
        <div style="text-align: center">
            <h1 style="color: #12AD2B; font-weight:bold">EXPLORE THE THOUSAND ISLAND</h1>
            <h3 style="color: #EB5406; font-weight:bold">Let's Travel with Rumah Lestari Hijau</h3>
            <div style="width: 100%; background-image: url('gambar/autumn-reflections.png'); padding:5%; background-size: cover; ">
              {{-- GAMBAR DIDALAM GAMBAR --}}
                <img src="gambar/home1.svg" style="width: 25%; margin: 2%">
                <img src="gambar/home2.svg" style="width: 25%; margin: 2%">
                <img src="gambar/home3.svg" style="width: 25%; margin: 2%">
            </div>
            <a href="/destination"><button style="border-radius: 20px; background: linear-gradient(to right, orange, red); color: white; padding: 1%; padding-left: 3%; padding-right: 3%; translate: 0% -50%">See More</button></a>
            <p style="border-radius: 20px; color: white; translate: 0% -400%; font-size: 300%; font-weight:bold">A Truly EXtraordinary Experience</p>
            {{-- Style= "Translate: X Y" --}}
        </div>
    </div>
    <!-- Visit Destination End -->


    <!-- Visit Homestay and Culinary Start -->
    <div style="text-align: center">
        <h1 style="font-weight: bold; color: #4CC417">OUR SERVICE PRODUCT</h1>
    </div>

    <div style="display: flex; text-align: justify; justify-content: center;">
        <div style="padding: 5%">
            <h4 style="text-align: center; font-weight: bold; color: green">
                Choose The Place Where you want to Visit
            </h4>
            <div style="text-align:center; width: 50vh;">
                <img src="{{Storage::url($hs->photo)}}" style="width: 100%;">
                <a href="/homestay"><button style="border-radius: 20px; background: linear-gradient(to right, orange, red); color: white; padding: 2%; padding-left: 5%; padding-right: 5%; translate: 125% -150%">See More</button></a>
            </div>

            <p style="white-space: pre-line;" style="font-weight: bold">
                {{$hs->description}}
            </p>
        </div>

        <div style="padding:5%">
            <h4 style="text-align: center; font-weight: bold; color: green">
                Explore a Different Way Culinary Experience
            </h4>
            <div style="text-align:center; width: 50vh;">
                <img src="{{Storage::url($cul->photo)}}" style="width: 100%">
                <a href="/culinary"><button style="border-radius: 20px; background: linear-gradient(to right, orange, red); color: white; padding: 2%; padding-left: 5%; padding-right: 5%; translate: 125% -150%">See More</button></a>
            </div>
            <p style="white-space: pre-line;" style="font-weight: bold">
                {{$cul->description}}
            </p>
        </div>
    </div>
@endsection
