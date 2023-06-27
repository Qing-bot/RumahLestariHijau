@extends('template.template')

@section('title', 'Destination Detail - Rumah Hijau')

@section('content')

<style>
    .buttonDestinationDetail {
        width: 20%;
        padding: 2%;
        margin: 2%;
        border: none;
        background: linear-gradient(to bottom, green, lime);
        color: white;
        border-radius: 10px
    }

    .buttonDestinationDetail:active,
    .buttonDestinationDetail:hover {
        width: 20%;
        padding: 2%;
        margin: 2%;
        border: none;
        background: linear-gradient(to bottom, green, rgb(0, 54, 0));
        color: white;
        border-radius: 10px
    }

</style>

<div style=" height:fit-content; padding: 40px; ">
    <div style="width: 60%; box-shadow: 1px 2px 4px 6px gray; padding: 3%; float: left; border-radius: 10px">
        <p style="text-align:center; font-size: 150%; font-weight: bold; color: green">{{$des->name}}</p>
        <img src="{{Storage::url($des->photo)}}" style="width: 693px; height: 309px; object-fit: cover;">
        <div class="ets">
            <button id="DescriptionButton" class="buttonDestinationDetail"
                onclick="document.getElementById('Description').style.display='block'; document.getElementById('Rundown').style.display='none'; document.getElementById('Location').style.display='none'; document.getElementById('Price').style.display='none'">Description</button>
            <button class="buttonDestinationDetail"
                onclick="document.getElementById('Rundown').style.display='block'; document.getElementById('Description').style.display='none'; document.getElementById('Location').style.display='none'; document.getElementById('Price').style.display='none'">Rundown</button>
            <button class="buttonDestinationDetail"
                onclick="document.getElementById('Location').style.display='block'; document.getElementById('Description').style.display='none'; document.getElementById('Rundown').style.display='none'; document.getElementById('Price').style.display='none'">Location</button>
            <!-- <button class="buttonDestinationDetail"
                onclick="document.getElementById('Price').style.display='block'; document.getElementById('Description').style.display='none'; document.getElementById('Location').style.display='none'; document.getElementById('Rundown').style.display='none'">Price</button>
            -->
        </div> 
        <div id="Description" style="display:none">
            <p>{{$des->description}}</p>
            <p>Price : Rp. {{$des->price}} / person</p>
        </div>
        <div id="Rundown" style="display:none">
            {{$des->rundown}}
        </div>
        <div id="Location" style="display:none">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="510" id="gmap_canvas"
                        src="https://maps.google.com/maps?q={{$des->maps}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://2yu.co">2yu</a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 510px;
                            width: 100%;
                        }

                    </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 510px;
                            width: 100%;
                        }

                    </style>
                </div>
            </div>
        </div>
        <!-- <div id="Price" style="display:none">
            <table>
                <tr>
                    <td>Jumlah Peserta Tour</td>
                    <td>Harga/pax</td>
                </tr>
                @foreach ($des->destination_price as $data)
                <tr>
                    <td>{{$data->min_person}}-{{$data->max_person}}</td>
                    <td>Rp. {{$data->price}}</td>
                </tr>
                @endforeach
            </table>
        </div> -->
    </div>
    <style>
        table {
            width: 100%;
        }

        th,
        td {
            border: 1px solid gray;
            padding: 1%;
        }

        td {
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: #dddddd;
        }

    </style>
    <div style="width: 35%; display:inline-block; padding:5%; margin-top: -2%">
        <p style="font-weight: bold; color: green">Form Reserve Destination</p>
        <p style="margin-bottom: 1%">Full Name</p>
        <input type="text" id="name"
            style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Contact WA</p>
        <input type="number" id="number"
            style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Number of Participants</p>
        <input type="number" id="participant"
            style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Choice of Tour Packages</p>
        <input type="text" id="package"
            style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Date Choice</p>
        <input type="date" id="date"
            style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Note</p>
        <input type="text" id="note"
            style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 160px; font-size: 25px; border-radius: 10px">
        <!-- <a href="https://api.whatsapp.com/send?phone=628568758753&text=Ingin%20Destinasi"
            style="background: linear-gradient(to bottom, red, orange); border: none; padding: 3%; padding-left: 10%; padding-right: 10%; float: right; border-radius: 15px; margin-top: 20%; margin-bottom: 75%; color: white">Reverse
            Now</a> -->
        <a href="#" id="reverse-button" style="background: linear-gradient(to bottom, red, orange); border: none; padding: 3%; padding-left: 10%; padding-right: 10%; float: right; border-radius: 15px; margin-top: 20%; margin-bottom: 75%; color: white">Reserve Now</a>
    </div>
</div>

<script>
    // Supaya saat halaman pertama dibuka, button deskripsi aktif
    document.getElementById('DescriptionButton').click();
    
     // Ambil referensi ke masing-masing elemen input dan tombol "Reverse Now"
    const nameInput = document.getElementById("name");
    const numberInput = document.getElementById("number");
    const participantInput = document.getElementById("participant");
    const packageInput = document.getElementById("package");
    const dateInput = document.getElementById("date");
    const noteInput = document.getElementById("note");
    const reverseButton = document.getElementById("reverse-button");

    // Tambahkan event listener ke tombol "Reverse Now"
    reverseButton.addEventListener("click", function(event) {
        event.preventDefault();
        const nameValue = nameInput.value;
        const numberValue = numberInput.value;
        const participantValue = participantInput.value;
        const packageValue = packageInput.value;
        const dateValue = dateInput.value;
        const noteValue = noteInput.value;

        // Buat link WhatsApp dengan data yang diambil dari input
        const message = `Ingin Destinasi dengan keterangan\nNama: ${nameValue}\nNomor Kontak: ${numberValue}\nJumlah Peserta: ${participantValue}\nPaket Wisata: ${packageValue}\nTanggal: ${dateValue}\nCatatan: ${noteValue}`;
        const link = `https://api.whatsapp.com/send?phone=6285155488011&text=${encodeURIComponent(message)}`;

        // Buka link WhatsApp
        window.open(link);
    });
</script>

@endsection
