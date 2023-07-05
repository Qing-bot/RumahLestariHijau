@extends('template.template')

@section('title', 'Create Homestay - Rumah Hijau')

@section('content')

    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">  
            <p>{{ $error }}</p>
        </div>
    @endforeach

<form action="{{ route('updateHomestay', $product->id) }} " method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name Homestay</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <label for="name">Location Homestay</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ $product->location }}">
    </div>
    <div class="form-group">
        <label for="price">Price Homestay</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
    </div>

    <div class="form-group">
        <label for="homestay_image">Upload Gambar</label>
            <input id="homestay_image" type="file" class="form-control" name='upload' placeholder="Example input" accept=".png,.jpg,.jpeg" value="{{ $product->value }}">
                @if (!empty($product->upload))
                    <img src="{{ asset('homestay_img/' . $product->upload) }}" width="100px">
                @endif
                @error('upload')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>

    <!-- @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapusnya?')">Delete</button> -->
</form>


<form action="{{ route('homestay.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

@endsection