@extends('template.template')

@section('title', 'Promo - Rumah Hijau')

@section('content')

@php
                

                

                
@endphp


{{-- Tulisan Besar Promo --}}
<div style="text-align: center; font-size: 250%; font-weight: bold; margin-top: 10%; margin-bottom: 5%; color:#3bb143">Check Our <b style="color: #FF6700">Promos</b> To Get Special<br>Accommondation Prices Here</div>

{{-- What's NEW! --}}
<div style="font-size: 250%; margin-left: 5%; color: #3bb143; font-weight: bold; margin-bottom: 2%">What's <b style="color: #006400">NEW!</b></div>

<div id="carousel">
    {{---------------- LOOPING WHAT'S NEW LIST ----------------}}
    {{-- <div class="slidePromo"><a href="#"><img src="gambar/contohgambar.png" class="promoImage"></a></div> --}}
    {{---------------- LOOPING WHAT'S NEW LIST END ----------------}}

    @php
        // sort by created_on
        $cre = $pro->sortByDesc('created_at');
    @endphp

    @foreach ($cre as $data)
    <div class="slidePromo"><a href="#"><img src="{{Storage::url($data->photo)}}" style="height:300px; width:300px" class="promoImage"></a></div>
    @endforeach
    {{-- <div class="slidePromo"><a href="#"><img src="gambar/contohgambar.png" class="promoImage"></a></div>
    <div class="slidePromo"><a href="#"><img src="gambar/contohgambar.png" class="promoImage"></a></div>
    <div class="slidePromo" style="width: 0%"></div> --}}
</div>
{{-- What's NEW! End --}}

{{-- Last Activity! --}}
<div style="font-size: 250%; margin-left: 5%; color: #3bb143; font-weight: bold; margin-bottom: 2%">Last<b style="color: #006400"> Activity!</b></div>
<div id="carousel2">
  {{---------------- LOOPING LAST ACTIVITY LIST ----------------}}

  {{---------------- LOOPING LAST ACTIVITY LIST END ----------------}}

  @php
      // sort by updated_on
      $upd = $pro->sortByDesc('updated_at');
  @endphp

  @foreach ($upd as $data)
  <div class="slidePromo"><a href="#"><img src="{{Storage::url($data->photo)}}" style="height:300px; width:300px;" class="promoImage"></a></div>
  @endforeach
</div>

<div style="margin-bottom: 10%"></div>
{{-- Last Activity! End --}}

<script>
    // Script Carousel 1
    const carousel = document.querySelector('#carousel');
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
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
    });

    // Script Carousel 2
    const carousel2 = document.querySelector('#carousel2');
    let isDown2 = false;
    let startX2;
    let scrollLeft2;

    carousel2.addEventListener('mousedown', (e) => {
      isDown2 = true;
      carousel2.classList.add('active');
      startX2 = e.pageX - carousel2.offsetLeft;
      scrollLeft2 = carousel2.scrollLeft;
    });
    carousel2.addEventListener('mouseleave', () => {
      isDown2 = false;
      carousel2.classList.remove('active');
    });
    carousel2.addEventListener('mouseup', () => {
      isDown2 = false;
      carousel2.classList.remove('active');
    });
    carousel2.addEventListener('mousemove', (e) => {
      if(!isDown2) return;
      e.preventDefault();
      const x2 = e.pageX - carousel2.offsetLeft;
      const walk2 = (x2 - startX2) * 2;
      carousel2.scrollLeft = scrollLeft2 - walk2;
    });
</script>


@endsection
