@extends('layouts.app')
@section('title', 'Home')
@section('content')
  <header class="text-center">
    <h1>
      Explore Explore The Beautiful World
      <br />
      As Easy One Click 
    </h1>

    <p class="mt-3">
      You will see beautiful
      <br />
      moment you never see before
    </p>
    <a href="" class="btn btn-get-started px-4 mt-4"> Get Started </a>
  </header>

  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20k</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3k</h2>
          <p>Hotels</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>81</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>

    <!-- SECTION POPULAR -->
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>

            <p>
              You will see beautiful
              <br />
              moment you never see before
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- POPULAR CONTENT -->
    <div class="section section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          @foreach ($travel_packages as $travel_package)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-travel text-center d-flex flex-column"
              style="background-image: url('{{$travel_package->galleries->count() ? Storage::url($travel_package->galleries->first()->image) : ''}}')"
            >
              <div class="travel-country">{{$travel_package->location}}</div>
              <div class="travel-location">{{$travel_package->title}}</div>
              <div class="travel-button mt-auto">
                <a href="{{route('detail', $travel_package->slug)}}" class="btn btn-travel-details">View Details</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- NETWORKS -->

    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br />
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img
              src="frontend/images/networks.png"
              alt="img-networks"
              class="img-patner"
            />
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They're Loving Us</h2>
            <p>
              Moments were giving them
              <br />
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img
                  src="frontend/images/testimonial1.png"
                  alt="User"
                  class="rounded-circle"
                />
                <h3>Bayu Adi P</h3>
                <p class="testimonial">
                  "it was glorious and I could non stop say wohooo for every
                  single moment dankeeeee"
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Paris, France</p>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img
                  src="frontend/images/testimonial2.png"
                  alt="User"
                  class="rounded-circle"
                />
                <h3>Delina Putri A</h3>
                <p class="testimonial">
                  "it was glorious and I could non stop say wohooo for every
                  single moment dankeeeee"
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Deratan Bali</p>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img
                  src="frontend/images/testimonial3.png"
                  alt="User"
                  class="rounded-circle"
                />
                <h3>Wahyu Radiansyah</h3>
                <p class="testimonial">
                  "it was glorious and I could non stop say wohooo "
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Phucket Island</p>
            </div>
          </div>
        </div>
        <!-- BUTTON -->
        <div class="row">
          <div class="col-12 text-center">
            <a href=" " class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>
            <a href=" " class="btn btn-get-started px-4 mt-4 mx-1">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection