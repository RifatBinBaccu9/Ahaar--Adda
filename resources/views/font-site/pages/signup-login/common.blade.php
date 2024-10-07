@if (Auth::user())
<div class="nav-item dropdown pe-3" >

  <a  class="nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="margin-left: 50px; padding-top: 23px;">
    <img src="{{asset($user->profilePicture)}}" alt="Profile" class="rounded-circle" height="50px" width="50px">
    <span class="d-none d-md-block dropdown-toggle ps-2">{{$user->name}}</span>
  </a><!-- End Profile Iamge Icon -->

  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="margin-left: 50px; padding-top: 23px; text-align: center">
    <li class="dropdown-header">
      <h6>{{$user->name}}</h6>
      <span>{{$user->email}}</span>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>
    
    @if(Auth::user()->is_tyep == 'admin')
    <li>
      <a class="dropdown-item d-flex align-items-center" href="{{url('/user/profile')}}">
        <i class="bi bi-person"></i>
        <span>My Profile</span>
      </a>
    </li>
    @else
    <li>
      <a class="dropdown-item d-flex align-items-center" href="{{url('/user/profiles')}}">
        <i class="bi bi-person"></i>
        <span>My Profile</span>
      </a>
    </li>
    @endif
    <li>
      <hr class="dropdown-divider">
    </li>

        @if(Auth::user()->is_tyep == 'admin')
        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{url('/admin')}}">
            <span>Dashboard</span>
          </a>
        </li>
        @else
        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{url('/user')}}">
            <span>Dashboard</span>
          </a>
        </li>
        @endif

    <li>
      <hr class="dropdown-divider">
    </li>

    <li>
      <a class="dropdown-item d-flex align-items-center" href="{{url('/logout')}}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Log Out</span>
      </a>
    </li>

  </ul><!-- End Profile Dropdown Items -->
</div><!-- End Profile Nav -->
@else
  <a href="{{url('/signup')}}" class="nav-item nav-link">Sign Up</a>
  <a href="{{url('/login')}}" class="nav-item nav-link">Login</a>
@endif