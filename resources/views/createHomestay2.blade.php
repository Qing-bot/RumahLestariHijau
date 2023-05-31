@extends('template.admintemplate')

@section('title', 'Create Homestay - Rumah Hijau')

@section('content')

  @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      <p>{{ $error }}</p>
    </div>
  @endforeach

  @if(Auth::check())
    <form method='POST' action="{{ route('store') }}">
      @csrf
        <div class="form-group">
          <label for="name">Name Homestay</label>
            <input id="name" type="text" class="form-control" name='name'  placeholder="Example input">
            @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

    <form method='POST' action="{{ route('store') }}">
      @csrf
        <div class="form-group">
          <label for="name">Location Homeestay</label>
            <input id="name" type="text" class="form-control" name='location'  placeholder="Example input">
            @error('location')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

    <div class="form-group">
      <label for="price">Price Homestay</label>
        <input id="price" type="text" class="form-control" name='price'  placeholder="Another input">
          @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    <!-- <form method='POST' action="{{ route('store') }}" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="name">Upload Gambar</label>
            <input id="upload" type="file" class="form-control" name='upload' placeholder="Example input" accept=".png,.jpg,.jpeg">
            @error('upload')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> -->

    <div class="form-group">
      <label for="homestay_image">Upload Gambar</label>
        <input id="homestay_image" type="file" class="form-control" name='upload' placeholder="Example input" accept=".png,.jpg,.jpeg">
        @error('upload')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">{{ __('Add Homestay') }}</button>

  @endif
</form>


@endsection
