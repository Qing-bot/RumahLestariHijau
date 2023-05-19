@extends('template.admintemplate')

@section('title', 'Edit Souvenir - Rumah Hijau')

@section('content2')
<style>
    form {
        box-sizing: border-box;
        padding: 30px 50px;
    }

</style>


@if(Auth::check())
<form method='POST' enctype="multipart/form-data" action="{{ route('edits', $data->id) }}">
    @csrf
    <div class="form-group">
        <label for="name">Name Souvenir</label>
        <input id="name" value="{{$data->name}}" type="text" class="form-control" name='name' placeholder="Sop Buntut">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description Souvenir</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$data->description}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Price Souvenir</label>
        <input id="price" type="number" class="form-control" name='price' placeholder="100000" value="{{$data->price}}">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="image">Image Souvenir</label>
        <input id="image" type="file" class="form-control" name='image'  accept=".png,.jpg,.jpeg">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">{{ __('Edit Souvenir') }}</button>
    @endif
</form>


@endsection
