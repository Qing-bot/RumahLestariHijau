@extends('template.admintemplate')
@section('title', 'Admin Home')

@section('content2')
    <link rel="stylesheet" href="/css/adminhome.css">
    <div class="kontainer">
        <a href="/">Home</a>
        <a href="/tableHomestay">Homestay</a>
        <a href="/tableCulinary">Culinary</a>
        <a href="/tableDestination">Destination</a>
        <a href="/tablePromo">Promo</a>
        <a href="/tableSouvenir">Souvenirs</a>
    </div>
@endsection
