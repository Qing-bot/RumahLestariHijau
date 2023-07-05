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
<form method='POST' enctype="multipart/form-data" action="{{ route('editd',$data->id) }}">
    @csrf
    <div class="form-group">
        <label for="name">Name Destination</label>
        <input id="name" type="text" value="{{$data->name}}"class="form-control" name='name' placeholder="Outbond Kuta Bali">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description Destination</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$data->description}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="rundown">Rundown Destination</label>
        <textarea class="form-control" name="rundown" id="rundown" cols="30" rows="10">{{$data->rundown}}</textarea>
        @error('rundown')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="address">Address Destination</label>
        <input class="form-control" name="address" value="{{$data->address}}" id="address" placeholder="Jl. Anggrek No. 21">
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="address">Price Destination</label>
        <input id="price" type="number" class="form-control" name='price' value="{{$data->price}}" placeholder="100000">
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
    @foreach ($price as $data)
    <div class="form-group">
        <label for="person{{$loop->index+1}}"> Price Destination for </label>
            
        <div id="parent" style="display: flex;">
            <div id="left" style="flex-basis: 50%; flex-grow: 1; flex-shrink: 10; border: 1px;">
                <input id="minp{{$loop->index+1}}" type="number" class="form-control" name='minp{{$loop->index+1}}' 
                style='width:10em' placeholder="100000" value="{{$price[$loop->index]->min_person}}">
            </div>
            -
            <div id="right" style="flex-basis: 50%; flex-grow: 1; flex-shrink: 1; border: 1px;">
                <input id="maxp{{$loop->index+1}}" type="number" class="form-control" name='maxp{{$loop->index+1}}' 
                style='width:10em' placeholder="100000" value="{{$price[$loop->index]->max_person}}">
            </div>
            Pax
        </div>
         
        <input id="price{{$loop->index+1}}" type="number" class="form-control" name='price{{$loop->index+1}}' 
            placeholder="100000" value="{{$price[$loop->index]->price}}">
        
        @error('price{{$loop->index+1}}')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    @endforeach

    <div class="form-group">
        <label for="personnew"> Left if empty if dont want. Add new Price Destination for </label>
            
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
    </div>
    -->

    <button type="submit" class="btn btn-primary">{{ __('Edit Destination') }}</button>
    @endif
</form>


@endsection
