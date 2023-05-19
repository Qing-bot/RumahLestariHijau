@extends('template.template')

@section('title', 'Souvenir - Rumah Hijau')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
{{-- Tulisan Besar Souvenir --}}
<div style="text-align: center; font-size: 250%; font-weight: bold; margin-top: 10%; margin-bottom: 5%; color:#3bb143">
    Choose The Perfect <b style="color: #FF6700">Souvenir</b><br>for Your Family</div>

{{-- Kotak Gambar dan Deskripsi Souvenir --}}

<div style="width: 100%; margin-left: 6%; margin-bottom: 50%">
    @foreach ($sou as $data)
    <div class="kotakSouvenir">
        <img src="{{Storage::url($data->photo)}}" style="width: 100%; border-radius: 20px 20px 0px 0px">
        <div style="padding: 4%">
            <div style="text-align: justify; margin-bottom: 3%">{{$data->name}}</div>
            <div class="hargaSouvenir">Rp. {{$data->price}}</div>
            <button id="openModal" class="checkButtonSouvenir" onclick="openForm({{$data->id}})">Check</button>
        </div>
    </div>
    @endforeach

</div>

{{-- Untuk Function Button Check Souvenir --}}
@foreach ($sou as $data)

<div id="myOverlay {{$data->id}}" class="overlayCulinary">

    <div class="wrapSouvenir">
        <span class="closebtnCulinary" onclick="closeForm({{$data->id}})" title="Close"> X </span>
        <img src="{{Storage::url($data->photo)}}"
            style="margin-left: auto; margin-right: auto; width: 50%; display: block; border-radius: 10px; margin-bottom: 5%">
        <div style="text-align: center; font-weight: bold; color: green; margin-bottom: 3%">{{$data->name}}</div>
        <div style="text-align: justify; margin-bottom: 4%">{{$data->description}}</div>
        <div style="text-align: center; color: green; font-weight: bold; float: center">Rp. {{$data->price}},00</div>
        <!-- <button class="buyNowSouvenir">Buy Now</button> -->
        <a href="https://api.whatsapp.com/send?phone=6285155488011&text=Saya%20Ingin%20Membeli%20Souvenir%20{{ $data->name }}"
            class="buyNowSouvenir">Buy
            Now</a>
    </div>
</div>
@endforeach

<script>
    function openForm(id) {
        name = "myOverlay " + id;
        document.getElementById(name).style.display = "block";
    }

</script>

<script>
    function closeForm(id) {
        name = "myOverlay " + id;
        document.getElementById(name).style.display = "none";
    }
    // $(document).ready(function () {

    //     // $("#openModal").click(function(){
    //     //     $("#modal_div").show();
    //     // });

    //     window.onclick = function (event) {
    //         // document.getElementById(name).style.display = "none";
    //         if (event.target.id != "image_in_modal_div") {
    //             $("#modal_div").hide();
    //         }
    //     }

    // });

</script>
@endsection
