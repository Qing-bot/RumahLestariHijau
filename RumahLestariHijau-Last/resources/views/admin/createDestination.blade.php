@extends('template.admintemplate')

@section('title', 'Create Destination - Rumah Hijau')

@section('content2')
<style>
    form {
        box-sizing: border-box;
        padding: 30px 50px;
    }

</style>


@if(Auth::check())
<form method='POST' enctype="multipart/form-data" action="{{ route('stored') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name Destination</label>
        <input id="name" type="text" class="form-control" name='name' placeholder="Outbond Kuta Bali">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description Destination</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="rundown">Rundown Destination</label>
        <textarea class="form-control" name="rundown" id="rundown" cols="30" rows="10"></textarea>
        @error('rundown')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="address">Address Destination</label>
        <input class="form-control" name="address" id="address" placeholder="Jl. Anggrek No. 21">
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">Image Destination</label>
        <input id="image" type="file" class="form-control" name='image'  accept=".png,.jpg,.jpeg">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price1">Price Destination (1-4 Pax)</label>
        <input id="price1" type="number" class="form-control" name='price1' placeholder="100000">
        @error('price1')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price2">Price Destination (5-9 Pax)</label>
        <input id="price2" type="number" class="form-control" name='price2' placeholder="100000">
        @error('price2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price3">Price Destination (10-14 Pax)</label>
        <input id="price3" type="number" class="form-control" name='price3' placeholder="100000">
        @error('price3')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price4">Price Destination (15 Pax++)</label>
        <input id="price4" type="number" class="form-control" name='price4' placeholder="100000">
        @error('price4')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">{{ __('Add Destination') }}</button>
    @endif
</form>


@endsection
