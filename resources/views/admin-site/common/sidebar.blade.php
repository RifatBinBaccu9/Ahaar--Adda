<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/user/profile')}}">
          <i class="bi bi-grid"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      
      <li class="nav-heading">Booking Data List</li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('/admin/bookingList') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Users Booking List</span>
        </a>
    </li><!-- End Booking Setting Nav -->
    
    <li class="nav-heading">Contact Data List</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/contact/list">
            <i class="bi bi-envelope"></i>
            <span>Users Contact List</span>
        </a>
    </li><!-- End Contact Page Nav -->

      <li class="nav-heading">Service Setting</li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('/admin/addService') }}">
              <i class="bi bi-journal-text"></i>
              <span>Add Service</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('/admin/serviceList') }}">
              <i class="bi bi-layout-text-window-reverse"></i>
              <span>Service List</span>
          </a>
      </li><!-- End Service Setting Nav -->

      <li class="nav-heading">Booking People Setting</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/admin/addbookingPeople') }}">
            <i class="bi bi-journal-text"></i>
            <span>Add Number of people</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/admin/addbookingPeopleData') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Add People Set List</span>
        </a>
    </li><!-- End Service Setting Nav -->

      <li class="nav-heading">Team Setting</li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('admin/addTeam') }}">
              <i class="bi bi-journal-text"></i>
              <span>Add Team Members</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('admin/addTeam/list') }}">
              <i class="bi bi-layout-text-window-reverse"></i>
              <span>Team Members List</span>
          </a>
      </li><!-- End Service Setting Nav -->

      <li class="nav-heading">Testimonial Setting</li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('/admin/addTestimonial') }}">
              <i class="bi bi-journal-text"></i>
              <span>Add Testimonial</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('/admin/addTestimonial/list') }}">
              <i class="bi bi-layout-text-window-reverse"></i>
              <span>Testimonial List</span>
          </a>
      </li><!-- End Service Setting Nav -->

      <li class="nav-heading">Food Menu Setting</li>
      
      <!-- Breakfast Section -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#breakfastSubmenu" data-bs-toggle="collapse">
            <i class="fa-solid fa-bars-progress"></i>
              <span>Breakfast</span>
              <i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="breakfastSubmenu" class="collapse nav-content">
              <li><a href="{{ url('/admin/addBreakFast') }}">Add Breakfast Item</a></li>
              <li><a href="{{ url('/admin/addBreakFast/List') }}">Breakfast List</a></li>
          </ul>
      </li><!-- End Breakfast Section -->
      
      <!-- Lunch Section -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#lunchSubmenu" data-bs-toggle="collapse">
            <i class="fa-solid fa-bars-progress"></i>
              <span>Lunch</span>
              <i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="lunchSubmenu" class="collapse nav-content">
              <li><a href="{{ url('/admin/addLaunch') }}">Add Lunch Item</a></li>
              <li><a href="{{ url('/admin/addLaunch/List') }}">Lunch List</a></li>
          </ul>
      </li><!-- End Lunch Section -->
      
      <!-- Dinner Section -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#dinnerSubmenu" data-bs-toggle="collapse">
            <i class="fa-solid fa-bars-progress"></i>
              <span>Dinner</span>
              <i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="dinnerSubmenu" class="collapse nav-content">
              <li><a href="{{ url('/admin/addDinner') }}">Add Dinner Item</a></li>
              <li><a href="{{ url('/admin/addDinner/List') }}">Dinner List</a></li>
          </ul>
      </li><!-- End Dinner Section -->


      <li class="nav-heading">Update Setting</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/admin/navbarUpdateForm') }}">
          <i class="bi bi-journal-text"></i>
          <span>Update NavBar Name</span>
      </a>
  </li><!-- End Service Setting Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/admin/carouselUpdateForm') }}">
          <i class="bi bi-journal-text"></i>
          <span>Update Carousel</span>
      </a>
  </li><!-- End Service Setting Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/admin/aboutUpdateForm') }}">
          <i class="bi bi-journal-text"></i>
          <span>Update About</span>
      </a>
  </li><!-- End Service Setting Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/admin/footerUpdateForm') }}">
          <i class="bi bi-journal-text"></i>
          <span>Update Footer</span>
      </a>
  </li><!-- End Service Setting Nav -->
      <li class="nav-heading">Pages Setting</li>
     

    </ul>

  </aside>