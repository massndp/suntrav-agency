@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Transakasi</h1>
    </div>  

    <div class="container">

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Paket Travel</th>
                    <td>{{$item->travel_package->title}}</td>
                </tr>
                <tr>
                    <th>Pembeli</th>
                    <td>{{$item->user->name}}</td>
                </tr>
                <tr>
                    <th>Visa</th>
                    <td>{{$item->additional_visa}}</td>
                </tr>
                <tr>
                    <th>Total Transaksi</th>
                    <td>{{$item->transaction_total}}</td>
                </tr>
                <tr>
                    <th>Status Transaksi</th>
                    <td>{{$item->transaction_status}}</td>
                </tr>
                <tr>
                    <th>Detail Pembelian</th>
                    <td>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kebangsaan</th>
                                    <th>Visa</th>
                                    <th>Passport</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($item->details as $detail)
                                    <tr>
                                        <td>{{$detail->username}}</td>
                                        <td>{{$detail->nationality}}</td>
                                        <td>{{$detail->is_visa ? '30 Days' : 'N/A'}}</td>
                                        <td>{{$detail->doe_passport}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
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


