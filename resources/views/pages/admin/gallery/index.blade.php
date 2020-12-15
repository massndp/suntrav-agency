@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
      <a href="{{route('gallery.create')}}" class="btn btn-primary btn-sm shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add Gallery
    </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Travel Package</th>
                          <th>Image</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @forelse ($items as $item)
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$item->travel_package->title}}</td>
                          <td>
                            <img src="{{Storage::url($item->image)}}" alt="" style="width: 150px" class="img-thumbnail">  
                          </td>
                          <td>
                            <a href="{{route('gallery.edit', $item->id)}}" class="btn btn-success">
                            <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{route('gallery.destroy', $item->id)}}" method="POST" class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger" onclick="return confirm('yakin nih mau dihapus')">
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
  </div>
@endsection