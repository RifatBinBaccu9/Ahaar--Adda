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
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{url('/')}}" class="nav-item nav-link ">Home</a>
                        <a href="{{url('/about')}}" class="nav-item nav-link ">About</a>
                        <a href="{{url('/service')}}" class="nav-item nav-link">Service</a>
                        <a href="{{url('/menu')}}" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('/booking')}}" class="dropdown-item active">Booking</a>
                                <a href="{{url('/team')}}" class="dropdown-item">Our Team</a>
                                <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                         <!-- Common section start-->
                   @include('font-site.pages.signup-login.common')
                   <!-- Common section end-->
                    </div> 
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form action="{{route('bookingPush')}}" method="POST">
                            @csrf
                          
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" name="datetime" class="@error('datetime') is-invalid @enderror form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                        @error('datetime')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select @error('select') is-invalid @enderror" name="select" id="select1">
                                          @foreach ($bookingView as $item)
                                          
                                          <option value="{{$item->people}}">people{{$item->people}}</option>
                                          @endforeach
                                    
                                        </select>
                                        <label for="select1">No Of People</label>
                                        @error('select')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                        @error('message')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    @if (Auth::user())
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                    @else
                                    <a class="btn btn-primary w-100 py-3" href="{{route('login')}}">Book Now</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->
        @endsection