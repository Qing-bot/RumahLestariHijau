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
        <label for="address">Price Destination</label>
        <input id="price" type="number" class="form-control" name='price' placeholder="100000">
        @error('price')
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

    <!--
    <div class="form-group">
        <label for="personnew"> Add new Price Destination for </label>
            
        <div id="parent" style="display: flex;">
            <div id="left" style="flex-basis: 50%; flex-grow: 1; flex-shrink: 10; border: 1px;">
                <input id="minpnew" type="number" class="form-control" name='minpnew' 
                style='width:10em' placeholder="2">
            </div>
            -
            <div id="right" style="flex-basis: 50%; flex-grow: 1; flex-shrink: 1; border: 1px;">
                <input id="maxpnew" type="number" class="form-control" name='maxpnew' 
                style='width:10em' placeholder="3">
            </div>
            Pax
        </div>
         
        <input id="pricenew" type="number" class="form-control" name='pricenew' 
            placeholder="100000">
        @error('pricenew')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    -->
    <button type="submit" class="btn btn-primary">{{ __('Add Destination') }}</button>
    @endif
    
</form>


@endsection
