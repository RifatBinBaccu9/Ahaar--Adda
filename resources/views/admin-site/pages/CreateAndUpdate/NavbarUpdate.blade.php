@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Navbar Name</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Navbar Name</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Navbar Name Setting</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('navbarPush')}}" method="POST" >
            @csrf
            <div class="form-group">
              <label for="WebsitName">Website Name</label>
              <input type="text" name="NavbarName" class="form-control" id="NavbarName">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
          </form><!-- Vertical Form -->
        </div>
      </div>
  </main>
@endsection