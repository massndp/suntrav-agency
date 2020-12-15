@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="container d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{$item->title}}</h1>
      {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('travel-package.update', $item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="title" class="form-control" value="{{$item->title}}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" placeholder="location" class="form-control" value="{{$item->location}}">
                </div>
                <div class="form-group">
                    <label for="about">about</label>
                    <textarea name="about" rows="10" class="form-control">{{$item->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" name="featured_event" placeholder="featured_event" class="form-control" value="{{$item->featured_event}}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" name="language" placeholder="language" class="form-control" value="{{$item->language}}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" name="foods" placeholder="foods" class="form-control" value="{{$item->foods}}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" name="departure_date" placeholder="departure_date" class="form-control" value="{{$item->departure_date}}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" placeholder="duration" class="form-control" value="{{$item->duration}}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" placeholder="type" class="form-control" value="{{$item->type}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" placeholder="price" class="form-control" value="{{$item->price}}">
                </div>

                <button class="btn btn-success btn-block shadow" type="submit">
                    <i class="fa fa-pencil-alt"></i> Edit Paket Travel
                </button>
            </form>
        </div>
    </div>
    
  </div>
@endsection