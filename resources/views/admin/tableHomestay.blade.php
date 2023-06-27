@extends('template.admintemplate')

@section('title', 'Create Homestay - Rumah Hijau')

@section('content2')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        /* menambahkan garis merah pada semua elemen table, th, dan td */

    }

    main {
        height: 100%;
    }

    h3 {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 36px;
        line-height: 42px;
        text-align: center;
    }

    .table {
        box-sizing: border-box;
        padding: 0 40px;
        width: 100%;
        height: 100%;
        display: flex;
        /* align-items: center; */
        justify-content: center;
        flex-direction: column;
    }

    .add:hover {
        text-decoration: none;
        color: #000;
    }

    .add {
        position: relative;
        left: 0;
        width: fit-content;
        font-size: 20px;
    }

</style>

@if(Auth::check())

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Homestay Deleted Successfully!!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="table">
    <a class="add" href="/createHomestay"><i class="bi bi-plus"></i> Add Homestay</a>
    <h3>
        List Table Homestay
    </h3>
    <table class="table-bordered" align="center">
        </thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Location</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>

        @foreach($productHomestay as $data)
        <tbody>
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->location}}</td>
                <td>
                    @php
                        $idx = 5-$data->rating;
                    @endphp
                    @for ($i=1; $i<=$data->rating; $i++)
                    <i style="color:#ffdf00" class="bi bi-star-fill"></i>
                    @if(fmod($data->rating, 1) !== 0.00 && $i+0.5==$data->rating)
                    <i style="color:#ffdf00" class="bi bi-star-half"></i>
                    @endif
                    @endfor
                    @for ($i=1; $i<=$idx; $i++)
                    <i style="color:#ffdf00" class="bi bi-star"></i>
                    @endfor

                    {{-- {{$data->rating}} --}}
                </td>
                <td>Rp. {{$data->price}}</td>
                <td>
                    @foreach ($data->homestay_photo as $pho)
                    <img src="{{Storage::url($pho->path)}}" height="80px" width="100px">
                    @endforeach
                </td>

                <td>
                    <a href="/editTableHomestay/{{$data->id}}" class="btn btn-secondary"> Edit</a>
                    <!-- <button type="submit" class="btn btn-primary"></button> -->
                    {{-- @method('DELETE') --}}
                    {{-- <a href="{{url('editTableHomestay/'.$data->id) }}" class="btn btn-secondary"> Delete </a> --}}
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$data->id}}">Delete</button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@foreach ($productHomestay as $dt)
<div class="modal fade" id="exampleModal{{$dt->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete "{{$dt->name}}" homestay?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="{{route('deletehs', $dt->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endif

@endsection
