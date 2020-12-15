@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
    @endif
    

    <div class="card shadow">
      <div class="card-body">
        <form action="{{route('gallery.update', $item->id)}}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="travel_packages_id">Travel Package</label>
            <select name="travel_packages_id" class="form-control" required>
              <option value="{{$item->travel_packages_id}}"><strong>Pilih Paket Travel</strong></option>
              @foreach ($travel_packages as $travel_package)
                  <option value="{{$travel_package->id}}">
                    {{$travel_package->title}}
                  </option>
              @endforeach
            </select><br>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" class="form-control" placeholder="image">
            </div>
          </div>
          <button type="submit" class="btn-primary btn-block">Save</button>
        </form>
      </div>
  </div>
  </div>
@endsection

