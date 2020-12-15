<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a href="#" class="navbar-brand">
        <img src="{{url('frontend/images/logo.png')}}" alt="logo Suntrav" />
      </a>

      <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a href="" class="nav-link active">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a href="" class="nav-link">Paket Travel</a>
          </li>
          <li class="nav-item dropdown">
            <a
              href=""
              class="nav-link dropdown-toggle"
              id="navbardrop"
              data-toggle="dropdown"
            >
              Services
            </a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Link</a>
              <a href="#" class="dropdown-item">Link</a>
              <a href="#" class="dropdown-item">Link</a>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a href="" class="nav-link">Testimonial</a>
          </li>

          @guest
              <!-- mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0" type="button"
            onclick="event.preventDefault(); location.href='{{url('login')}}'">Masuk</button>
          </form>

          <!-- Desktop Botton -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px4" type="button"
            onclick="event.preventDefault(); location.href='{{url('login')}}'">
              Masuk
            </button>
          </form>
          @endguest

          @auth
              <!-- mobile Button -->
            <button class="btn btn-danger my-2 my-sm-0 d-sm-block d-md-none" type="button" data-toggle="modal" data-target="#exampleModal">Keluar</button>

          <!-- Desktop Botton -->
            <button class="btn btn-danger btn-navbar-right my-2 my-sm-0 px4 my-lg-0 d-none d-md-block" type="button" data-toggle="modal" data-target="#exampleModal">
              Keluar
            </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Yakin nih mau logout?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <form action="{{url('logout')}}" method="POST">
                    @csrf
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-danger">Ya, Logout!</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endauth
        </ul>
      </div>
    </nav>
  </div>