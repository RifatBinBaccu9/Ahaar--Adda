@if (Auth::user())
<div class="nav-item dropdown pe-3" >

  <a  class="nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="margin-left: 50px; padding-top: 23px;">
    <img src="/font-site/img/team-3.jpg" alt="Profile" class="rounded-circle" height="50px">
    <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
  </a><!-- End Profile Iamge Icon -->

  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="margin-left: 50px; padding-top: 23px; text-align: center">
    <li class="dropdown-header">
      <h6>Kevin Anderson</h6>
      <span>Web Designer</span>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>

    <li>
      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>My Profile</span>
      </a>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>

        @if(Auth::user()->is_tyep == 'admin')
        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{url('/admin')}}">
            <span>Admin Setting</span>
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