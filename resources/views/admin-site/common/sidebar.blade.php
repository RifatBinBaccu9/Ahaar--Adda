<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/admin')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-heading">Booking Setting</li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('/admin/bookingList') }}">
              <i class="bi bi-layout-text-window-reverse"></i>
              <span>User Booking List</span>
          </a>
      </li><!-- End Booking Setting Nav -->
      
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
      

      <li class="nav-heading">About Setting</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-journal-text"></i><span>Add About</span>
        </a>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>About Data</span>
        </a>
      </li><!-- End Tables Nav -->


      <li class="nav-heading">Contact Setting</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
      
      <li class="nav-heading">All Pages Setting</li>
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
      

    </ul>

  </aside>