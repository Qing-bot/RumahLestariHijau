@extends('template.admintemplate')

@section('title', 'Create Homestay - Rumah Hijau')

@section('content2')


<style>
    form {
        box-sizing: border-box;
        padding: 30px 50px;
    }

</style>

@if(Auth::check())
<form method='POST' action="{{ route('storehs') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Homestay Name</label>
        <input id="name" type="text" class="form-control" name='name' placeholder="Homestay">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="host">Homestay Host</label>
        <input id="host" type="text" class="form-control" name='host' placeholder="Host">
        @error('host')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="location">Homestay Location</label>
        <input id="location" type="text" class="form-control" name='location' placeholder="Jakarta">
        @error('location')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Homestay Address</label>
        <input id="address" type="text" class="form-control" name='address' placeholder="Jl. Pulomas Jaya Via, Jl. Kayu Putih Raya, RW.16, Kayu Putih, Pulo Gadung, East Jakarta City, Jakarta 13210">
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Homestay Price / Night</label>
        <input id="price" type="text" class="form-control" name='price' placeholder="300000">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="rating">Rating Homestay</label>
        <input id="rating" type="number" class="form-control" name='rating' placeholder="5">
        @error('rating')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="like">Like Homestay</label>
        <input id="like" type="number" class="form-control" name='like' placeholder="7000">
        @error('like')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="guest">Guest Room Capacity</label>
        <input id="guest" type="number" class="form-control" name='guest' placeholder="5">
        @error('guest')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bedroom">Bedroom Capacity</label>
        <input id="bedroom" type="number" class="form-control" name='bedroom' placeholder="2">
        @error('bedroom')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bed">Bed/room</label>
        <input id="bed" type="number" class="form-control" name='bed' placeholder="2">
        @error('bed')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bath">Bath/room</label>
        <input id="bath" type="number" class="form-control" name='bath' placeholder="2">
        @error('bath')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <strong>Nearby Place 1</strong><br>
    <div class="form-group">
        <label for="nearbyplace1">Place name</label>
        <input id="nearbyplace1" type="text" class="form-control" name='nearbyplace1' placeholder="Place 1">
        @error('nearbyplace1')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nearbydistance1">Place Distance (km)</label>
        <input id="nearbydistance1" type="text" class="form-control" name='nearbydistance1' placeholder="3">
        @error('nearbydistance1')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <strong>Nearby Place 2</strong><br>
    <div class="form-group">
        <label for="nearbyplace2">Place name</label>
        <input id="nearbyplace2" type="text" class="form-control" name='nearbyplace2' placeholder="Place 2">
        @error('nearbyplace2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nearbydistance2">Place Distance (km)</label>
        <input id="nearbydistance2" type="text" class="form-control" name='nearbydistance2' placeholder="3">
        @error('nearbydistance2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <strong>Nearby Place 3</strong><br>
    <div class="form-group">
        <label for="nearbyplace3">Place name</label>
        <input id="nearbyplace3" type="text" class="form-control" name='nearbyplace3' placeholder="Place 3">
        @error('nearbyplace3')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nearbydistance3">Place Distance (km)</label>
        <input id="nearbydistance3" type="text" class="form-control" name='nearbydistance3' placeholder="3">
        @error('nearbydistance3')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <strong>Nearby Place 4</strong><br>
    <div class="form-group">
        <label for="nearbyplace4">Place name</label>
        <input id="nearbyplace4" type="text" class="form-control" name='nearbyplace4' placeholder="Place 4">
        @error('nearbyplace4')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nearbydistance4">Place Distance (km)</label>
        <input id="nearbydistance4" type="text" class="form-control" name='nearbydistance4' placeholder="3">
        @error('nearbydistance4')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <strong>Popular Place 1</strong><br>
    <div class="form-group">
        <label for="popularplace1">Place name</label>
        <input id="popularplace1" type="text" class="form-control" name='popularplace1' placeholder="Place 1">
        @error('popularplace1')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="populardistance1">Place Distance (km)</label>
        <input id="populardistance1" type="text" class="form-control" name='populardistance1' placeholder="3">
        @error('populardistance1')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <strong>Popular Place 2</strong><br>
    <div class="form-group">
        <label for="popularplace2">Place name</label>
        <input id="popularplace2" type="text" class="form-control" name='popularplace2' placeholder="Place 2">
        @error('popularplace2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="populardistance2">Place Distance (km)</label>
        <input id="populardistance2" type="text" class="form-control" name='populardistance2' placeholder="3">
        @error('populardistance2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <strong>Popular Place 3</strong><br>
    <div class="form-group">
        <label for="popularplace3">Place name</label>
        <input id="popularplace3" type="text" class="form-control" name='popularplace3' placeholder="Place 3">
        @error('popularplace3')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="populardistance3">Place Distance (km)</label>
        <input id="populardistance3" type="text" class="form-control" name='populardistance3' placeholder="3">
        @error('populardistance3')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <strong>Nearby Place 4</strong><br>
    <div class="form-group">
        <label for="popularplace4">Place name</label>
        <input id="popularplace4" type="text" class="form-control" name='popularplace4' placeholder="Place 4">
        @error('popularplace4')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="populardistance4">Place Distance (km)</label>
        <input id="populardistance4" type="text" class="form-control" name='populardistance4' placeholder="3">
        @error('populardistance4')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <p>Resource</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="wifi" name="wifi" value="1">
            <label class="form-check-label" for="wifi">Wifi</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="parking" name="parking" value="1">
            <label class="form-check-label" for="parking">Parking</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="restaurant" name="restaurant" value="1">
            <label class="form-check-label" for="restaurant">Restaurant</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ac" name="ac" value="1">
            <label class="form-check-label" for="ac">AC</label>
        </div>
    </div>


    <div class="form-group">
        <label for="thumbnail">Upload Gambar Thumbnail</label>
        <input id="thumbnail" type="file" class="form-control" name='thumbnail' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        @error('thumbnail')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="upload">Upload Gambar 1</label>
        <input id="upload" type="file" class="form-control" name='upload' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        @error('upload')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="upload2">Upload Gambar 2</label>
        <input id="upload2" type="file" class="form-control" name='upload2' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        @error('upload2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="upload3">Upload Gambar 3</label>
        <input id="upload3" type="file" class="form-control" name='upload3' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        @error('upload3')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="upload4">Upload Gambar 4</label>
        <input id="upload4" type="file" class="form-control" name='upload4' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        @error('upload4')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">{{ __('Add Homestay') }}</button>
</form>
@endif
{{-- <div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=Jalan Asia Afrika Senayan, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://2yu.co">2yu</a><br>
        <style>.mapouter{position:relative;text-align:right;height:510px;width:770px;}</style>
        <a href="https://embedgooglemap.2yu.co">html embed google map</a>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:770px;}</style>
    </div>
</div> --}}

@endsection
