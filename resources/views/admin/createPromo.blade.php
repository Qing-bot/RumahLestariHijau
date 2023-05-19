@extends('template.admintemplate')

@section('title', 'Create Promo - Rumah Hijau')

@section('content2')
<style>
    form {
        box-sizing: border-box;
        padding: 30px 50px;
    }

</style>


@if(Auth::check())
<form method='POST' enctype="multipart/form-data" action="{{ route('storep') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name Promo</label>
        <input id="name" type="text" class="form-control" name='name' placeholder="Promo diskon">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">Image Promo</label>
        <input id="image" type="file" class="form-control" name='image'  accept=".png,.jpg,.jpeg">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">{{ __('Add Promo') }}</button>
    @endif
</form>

@endsection
