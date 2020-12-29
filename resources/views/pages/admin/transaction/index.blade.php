@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Transakasi</h1>
    </div>  

    <div class="container">
        @if (session('delete'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> 
            {{session('delete')}}
        </div>
        @endif
        @if (session('sukses'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> 
            {{session('sukses')}}
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="travel_package">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Paket Travel</th>
                        <th>Username</th>
                        <th>Nationality</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1 ?>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->travel_package->title}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->additional_visa}}</td>
                            <td>{{$item->transaction_total}}</td>
                            <td>{{$item->transaction_status}}</td>
                            <td>
                                <a href="{{route('transaction.show',$item->id)}}" class="btn btn-warning">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('transaction.edit',$item->id)}}" class="btn btn-success">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>

                                <form action="{{route('transaction.destroy', $item->id)}}" method="POST" class="d-inline">
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
@endsection

@push('prepend-style')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush 

@push('addon-script')

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {

    $('#travel_package').DataTable();
} );
</script>
@endpush


