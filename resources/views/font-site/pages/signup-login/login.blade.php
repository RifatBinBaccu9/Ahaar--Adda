@extends('font-site')
@section('font-site')
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
              <a href="" class="navbar-brand p-0">
                @foreach ($navbarView as $item)
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>
                    {{$item->NavbarName}}
                </h1>
                @endforeach
                  <!-- <img src="/font-site/img/logo.png" alt="Logo"> -->
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto py-0 pe-4">
                      <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                      <a href="{{url('/about')}}" class="nav-item nav-link ">About</a>
                      <a href="{{url('/service')}}" class="nav-item nav-link">Service</a>
                      <a href="{{url('/menu')}}" class="nav-item nav-link">Menu</a>
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                          <div class="dropdown-menu m-0">
                              <a href="{{url('/booking')}}" class="dropdown-item">Booking</a>
                              <a href="{{url('/team')}}" class="dropdown-item">Our Team</a>
                              <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
                          </div>
                      </div>
                      <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                      @if (!Auth::user())
                        <a href="{{url('/signup')}}" class="nav-item nav-link">Sign Up</a>
                        <a href="{{url('/login')}}" class="nav-item nav-link active">Login</a>
                      @endif
                  </div>
                 
              </div>
          </nav>

          <div class="container-xxl py-5 bg-dark hero-header mb-5">
              <div class="container text-center my-5 pt-5 pb-4">
                  <h1 class="display-3 text-white mb-3 animated slideInDown">Sign In</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center text-uppercase">
                          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                          <li class="breadcrumb-item text-white active" aria-current="page">Sign In</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
      <!-- Navbar & Hero End -->

<section class="bg-primary py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row gy-4 align-items-center ">
        <div class="col-12 col-md-6 col-xl-7 " >
          <div class="d-flex justify-content-center text-bg-primary">
            <div class="col-12 col-xl-9">
              <div style="font-size: 40px">Ahaar- Adda</div>
              <hr class="border-primary-subtle mb-4">
              <h2 class="h1 mb-4">Best Medical Care For Yourself and Your Family</h2>
              <p class="lead mb-5">We are your partner for health, helping your live well by bringing the best in healthcare to your door.</p>
              <div class="text-endx">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                  <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
          <div class="card border-0 rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-4">
                    <h2 class="h3">Sign In Account</h2>
                    <h3 class="fs-6 fw-normal text-secondary m-0">Get started with your free account</h3>
                  </div>
                </div>
              </div>
              <form action="{{route('loginPush')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gy-3 overflow-hidden">

                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                      <label for="email" class="form-label">Email</label>
                      @error('email')
                       <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="">
                      <label for="password" class="form-label">Password</label>
                      @error('password')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg" type="submit">Sign In</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-12">
                  <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
                    <p class="m-0 text-secondary text-center">Already have an account? <a href="{{route('signup')}}" class="link-primary text-decoration-none">Sign Up</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection