

<?php $__env->startSection('title', 'Home - Rumah Hijau'); ?>

<?php $__env->startSection('content'); ?>

<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto -->

<style>
    #carousel {
      overflow: hidden;
      white-space: nowrap;
      background: linear-gradient(to right, green, lime);
      padding-top: 2%;
      padding-bottom: 3%;
    }

    #descarousel {
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

    #desprev, #desnext {
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

    #indicators2 {
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

    .indicator2 {
      width: 15px;
      height: 15px;
      background: #ddd;
      border-radius: 50%;
      margin: 0 5px;
      cursor: pointer;
    }

    .indicator2.active2 {
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
    
  #hero {
  width: 100%;
  height: 100vh;
  /* background-color: rgba(163, 73, 83, 0.8); */
  overflow: hidden;
  position: relative;
  display: inline-block;
  z-index: 3;
}

#hero .carousel,
#hero .carousel-inner {
  height: auto;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  /* background-color: rgba(163, 173, 183, 0.8); */
  z-index: 2;
  }

#hero .carousel-item,
#hero .carousel-item::before {
  display: flex;
  position: absolute;
  height: 200px;
  width : 200px;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background-color: rgba(263, 273, 283, 0.8);
  z-index: 1;
}

#hero .carousel-item {
  display: flex;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

#hero .carousel-item::before {
  background-color: rgba(30, 35, 40, 0.6);
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 70px;
  left: 50px;
  right: 50px;
}

#hero .container {
  text-align: center;
}

#hero h2 {
  color: #fff;
  margin-bottom: 20px;
  font-size: 48px;
  font-weight: 700;
}

#hero p {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}

#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  opacity: ;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-inner .carousel-item-prev.carousel-item-end {
  opacity: 1;
  transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  left: 0;
  transform: translate3d(0, 0, 0);
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
  background: none;
  font-size: 30px;
  line-height: 0;
  width: auto;
  height: auto;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50px;
  transition: 0.3s;
  color: rgba(255, 255, 255, 0.5);
  width: 54px;
  height: 54px;
  display: flex;
  align-items: center;
  justify-content: center;
}

#hero .carousel-control-next-icon:hover,
#hero .carousel-control-prev-icon:hover {
  background: rgba(255, 255, 255, 0.3);
  color: rgba(255, 255, 255, 0.8);
}

#hero .carousel-indicators li {
  cursor: pointer;
  background: #fff;
  overflow: hidden;
  border: 0;
  width: 12px;
  height: 12px;
  border-radius: 50px;
  opacity: 0.6;
  transition: 0.3s;
}

#hero .carousel-indicators li.active {
  opacity: 1;
  background: #d9232d;
}

#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  background: #d9232d;
}

#hero .btn-get-started:hover {
  background: #df3740;
}

@media (max-width: 992px) {
  #hero {
    height: 100vh;
  }

  #hero .carousel-item {
    top: 8px;
  }

  #hero .carousel-container {
    top: 8px;
  }
}

@media (max-width: 768px) {
  #hero h2 {
    font-size: 28px;
  }
}

@media (min-width: 1024px) {

  #hero .carousel-control-prev,
  #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-height: 500px) {
  #hero {
    height: 120vh;
  }
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


    
    <div id="carousel" style="margin-top: -10%; margin-bottom: 8%">
        <?php $__currentLoopData = $pr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="slidePromo"><a href="#"><img src="<?php echo e(Storage::url($promo->photo)); ?>" style="height:300px; width:300px;" class="homeImage"></a></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

    



    <!-- Visit Destination Start AKA EXPLORE THE THOUSAND ISLAND -->
    <div>
        <div style="text-align: center">
            <h1 style="color: #12AD2B; font-weight:bold">EXPLORE THE THOUSAND ISLAND</h1>
            <h3 style="color: #EB5406; font-weight:bold">Let's Travel with Rumah Lestari Hijau</h3>
            <div style="width: 100%; background-image: url('gambar/autumn-reflections.png'); padding:5%; background-size: cover; ">
              
                <img src="gambar/home1.svg" style="width: 25%; margin: 2%">
                <img src="gambar/home2.svg" style="width: 25%; margin: 2%">
                <img src="gambar/home3.svg" style="width: 25%; margin: 2%">
            </div>
            <a href="/destination"><button style="border-radius: 20px; background: linear-gradient(to right, orange, red); color: white; padding: 1%; padding-left: 3%; padding-right: 3%; translate: 0% -50%">See More</button></a>
            <p style="border-radius: 20px; color: white; translate: 0% -400%; font-size: 300%; font-weight:bold">A Truly EXtraordinary Experience</p>
            
        </div>
    </div>

    <!-- Visit Destination End -->


    <!-- Hero Visit Homestay and Culinary Start -->
    <!-- <div style="text-align: center">
                <h1 style="font-weight: bold; color: #4CC417">OUR SERVICE PRODUCT</h1>
              </div>
        <section id="hero">
        <div id="heroCarousel" data-bs-interval="1000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        
            <div class="carousel-inner" role="listbox">
              
              <h4 style="text-align: center; font-weight: bold; color: green">
                Choose The Place Where you want to Visit
              </h4>
              
              <div class="carousel-item"> <img src="/gambar/cul.svg"> </div>
              <?php $__currentLoopData = $des; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                <div class="carousel-item">

                  <div class="carousel-container">
                    
                    <p style="white-space: pre-line;" style="font-weight: bold">  </p>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <a href="/destination"><button style="border-radius: 20px; background: linear-gradient(to right, orange, red); color: white; padding: 2%; padding-left: 5%; padding-right: 5%; translate: 125% -150%">See More</button></a>
                
              <h4 style="text-align: center; font-weight: bold; color: green">
                Explore a Different Way Culinary Experience
              </h4> -->

              

              
              <!-- <a href="/culinary"><button style="border-radius: 20px; background: linear-gradient(to right, orange, red); color: white; padding: 2%; padding-left: 5%; padding-right: 5%; translate: 125% -150%">See More</button></a>
            </div>
        </div>
    </section> -->

    <!-- <div id="descarousel">
      <?php $__currentLoopData = $cul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culinary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="slidePromo"><a href="#"><img src="<?php echo e(Storage::url($culinary->photo)); ?>" style="height:100px; width:100px;"></a></div>          
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div style="position: absolute; margin-left: 45%">
          <button id="desprev" style="float: left; font-size:50%; background-color: rgba(255, 255, 255, 0)"><div class="homeArrow" style="border: 1px solid white; border-radius: 100%; padding: 5%"><i class="fa fa-arrow-left" style="font-size: 150%"></i></div></button>
          <a class="homeSeeAllPromo" href="http://localhost:8000/culinary">See All Culinary</a>
          <button id="desnext" style="float: left; font-size:50%; background-color: rgba(255, 255, 255, 0)"><div class="homeArrow" style="border: 1px solid white; border-radius: 100%; padding: 5%"><i class="fa fa-arrow-right" style="font-size: 150%"></i></div></button>
        </div>
    </div>

    <script>
        const carousel2 = document.querySelector('#descarousel');
        const indicators2 = document.querySelectorAll('.indicator2');
        let currentSlide2 = 0;

        function updateIndicators2() {
          indicators2.forEach((indicator2) => indicator2.classList.remove('active2'));
          indicators2[currentSlide2].classList.add('active2');
        }

        carousel2.addEventListener('scroll', () => {
          currentSlide2 = Math.round(carousel2.scrollLeft2 / carousel2.offsetWidth);
          updateIndicators2();
        });

        indicators2.forEach((indicator2, index) => {
          indicator2.addEventListener('click', () => {
            carousel2.scrollLeft2 = index * carousel2.offsetWidth;
            currentSlide2 = index;
            updateIndicators2();
          });
        });
        const prevButton2 = document.querySelector('#desprev');
        const nextButton2 = document.querySelector('#desnext');
        let isDown2 = false;
        let startX2;
        let scrollLeft2;

        carousel2.addEventListener('mousedown', (e) => {
          isDown2 = true;
          carousel2.classList.add('active2');
          startX2 = e.pageX - carousel2.offsetLeft;
          scrollLeft2 = carousel2.scrollLeft2;
        });
        carousel2.addEventListener('mouseleave', () => {
          isDown2 = false;
          carousel2.classList.remove('active2');
        });
        carousel2.addEventListener('mouseup', () => {
          isDown2 = false;
          carousel2.classList.remove('active2');
        });
        carousel2.addEventListener('mousemove', (e) => {
          if(!isDown2) return;
          e.preventDefault();
          const x = e.pageX - carousel2.offsetLeft;
          const walk = (x - startX2) * 3;
          carousel2.scrollLeft2 = scrollLeft2 - walk;
        });

        prevButton2.addEventListener('click', () => {
          carousel2.scrollLeft2 -= carousel2.offsetWidth;
        });

        nextButton2.addEventListener('click', () => {
          carousel2.scrollLeft2 += carousel2.offsetWidth;
        });
      </script>

     -->


  <!-- Visit Homestay and Culinary End -->

    <div style="text-align: center">
        <h1 style="font-weight: bold; color: #4CC417">OUR SERVICE PRODUCT</h1>
    </div>

    <div style="display: flex; text-align: justify; justify-content: center;">
        <div style="padding: 5%">
            <h4 style="text-align: center; font-weight: bold; color: green">
                Choose The Place Where you want to Visit
            </h4>
            <div style="text-align:center; width: 50vh;">
                
                <div id="carousel2" style="margin-top: 10%; margin-bottom: 6%">
                
                  
                    <div class="slidePromo"><a href="#"><img src="<?php echo e(Storage::url($destination->photo)); ?>" style="height:200px; width:200px;" class="homeImage"></a></div>
                  
                </div>
                
                <a href="/homestay"><button style="border-radius: 20px; background: linear-gradient(to right, orange, red); color: white; padding: 2%; padding-left: 7%; padding-right: 7%; translate: 125% -150%">See More</button></a>
            </div>

            <p style="white-space: pre-line;" style="font-weight: bold">
                Menjelajahi tempat-tempat wisata yang menyenangkan!
            </p>
        </div>

        <div style="padding:5%">
            <h4 style="text-align: center; font-weight: bold; color: green">
                Explore a Different Way Culinary Experience
            </h4>
            <div style="text-align:center; width: 50vh;">
                
                <div id="carousel2" style="margin-top: 10%; margin-bottom: 6%">
                  
                    <div class="slidePromo"><img src="<?php echo e(Storage::url($culinary->photo)); ?>" style="height:200px; width:200px;" class="promoImage"></div>
                  
                </div>
                <a href="/culinary"><button style="border-radius: 20px; background: linear-gradient(to right, orange, red); color: white; padding: 2%; padding-left: 8%; padding-right: 8%; translate: 125% -150%">See More</button></a>
            </div>
            <p style="white-space: pre-line;" style="font-weight: bold">
                Menjelajahi makanan-makanan yang enak!
            </p> 
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/home.blade.php ENDPATH**/ ?>