@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
       <button class="btn btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i> Tambah Paket Travel
       </button>
    </div>  

    <div class="container">
        @if (session('sukses'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> 
            {{session('sukses')}}
        </div>
        @endif
        @if (session('delete'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> 
            {{session('delete')}}
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="package_travel">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Departure Date</th>
                        <th>Duration</th>
                        <th>Type</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1 ?>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->location}}</td>
                            <td>{{$item->departure_date}}</td>
                            <td>{{$item->duration}}</td>
                            <td>{{$item->type}}</td>
                            <td>
                                <a href="{{route('travel-package.edit',$item->id)}}" class="btn btn-success">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>

                                <form action="{{route('travel-package.destroy', $item->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('yakin mau dihapus?') ">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <?php $no++ ?>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                    @endforelse
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form action="{{route('travel-package.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="title" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" placeholder="location" class="form-control" value="{{old('location')}}">
            </div>
            <div class="form-group">
                <label for="about">about</label>
                <textarea name="about" rows="10" class="form-control">{{old('about')}}</textarea>
            </div>
            <div class="form-group">
                <label for="featured_event">Featured Event</label>
                <input type="text" name="featured_event" placeholder="featured_event" class="form-control" value="{{old('featured_event')}}">
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" name="language" placeholder="language" class="form-control" value="{{old('language')}}">
            </div>
            <div class="form-group">
                <label for="foods">Foods</label>
                <input type="text" name="foods" placeholder="foods" class="form-control" value="{{old('foods')}}">
            </div>
            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input type="date" name="departure_date" placeholder="departure_date" class="form-control" value="{{old('departure_date')}}">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" name="duration" placeholder="duration" class="form-control" value="{{old('duration')}}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" placeholder="type" class="form-control" value="{{old('type')}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" placeholder="price" class="form-control" value="{{old('price')}}">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection

@push('prepend-style')
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush

@push('addon-script')

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        console.log("123456")
    $('#package_travel').DataTable();
} );
</script>
@endpush


