@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#" style="color: rgb(214, 11, 221);">Profile</a></li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    
        <section class="section profile">
          <div class="row">
            <div class="col-xl-4">
    
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
    
                  <img src="{{asset($user->profilePicture)}}" alt="Profile" class="rounded-circle" height="130px" width="200px">
                  <h2>{{$user->name}}</h2>
                  <h3>{{$user->email}}</h3>
                  <div class="social-links mt-2">
                    <a href="{{$user->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="{{$user->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
                  </div>
                </div>
              </div>
    
            </div>
    
            <div class="col-xl-8">
    
              <div class="card">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
    
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Update Profile</button>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                    </li>
    
                  </ul>
                  <div class="tab-content pt-2">
    
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      <h5 class="card-title">About</h5>
                      <p class="small fst-italic">{{$user->about}}</p>
    
                      <h5 class="card-title">Profile Details</h5>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                        <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Phone</div>
                        <div class="col-lg-9 col-md-8">{{$user->phone}}</div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">{{$user->address}}</div>
                      </div>
    
                    </div>
    
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    
                      <!-- Profile Update Form -->
                      <form action="{{route('updateProfile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label for="profilePicture" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                          <div class="col-md-8 col-lg-9">
                            <img src="{{asset($user->profilePicture)}}" alt="Profile" height="130px" width="200px">
                            <div class="mt-3" >
                              
                              <label  class="p-2" for="profilePicture" style="border: 1px solid rgb(35, 62, 184); background: rebeccapurple; color:#fff; border-radius: 10px;cursor: pointer;">
                             <input style="font-size: 13px;cursor: pointer;" type="file" id="profilePicture" name="profilePicture" accept="image/*">Uplode Profile Pictuer</label>
                          
                            </div>
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="name" type="text" class="form-control" id="fullName">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                          <div class="col-md-8 col-lg-9">
                            <textarea name="about" class="form-control" id="about" style="height: 100px"></textarea>
                          </div>
                        </div>
   
                       <div class="row mb-3">
                         <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                         <div class="col-md-8 col-lg-9">
                           <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror" id="Email">
                           @error('email')
                           <div class="text-danger">{{ $message }}</div>
                         @enderror
                         </div>
                       </div>
    
                        <div class="row mb-3">
                          <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="phone" type="text" class="form-control" id="Phone" >
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="address" type="text" class="form-control" id="Address" >
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                          </div>
                        </div>
    
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                      </form><!-- End Profile Edit Form -->
    
                    </div>
    
                    <div class="tab-pane fade pt-3" id="profile-change-password">
                      <!-- Change Password Form -->
                      <form action="{{route('updatePassword')}}" method="POST">
                      @csrf
                        <div class="row mb-3">
                          <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="oldpassword" type="password" class="form-control" id="currentPassword">
                            @error('oldpassword')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="new_password" type="password" class="form-control" id="newPassword">
                            @error('new_password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="new_password_confirmation" type="password" class="form-control" id="renewPassword">
                            @error('new_password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
    
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                      </form><!-- End Change Password Form -->
    
                    </div>
    
                  </div><!-- End Bordered Tabs -->
    
                </div>
              </div>
    
            </div>
          </div>
        </section>
    
  </main>
@endsection