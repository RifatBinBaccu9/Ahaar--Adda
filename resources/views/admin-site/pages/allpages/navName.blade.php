@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Pages Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">All Pages Setting</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">All Pages Setting</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('navbarPush')}}" method="POST" >
            @csrf
            <div class="col-12">
              @foreach ($navView as $item)
              <label for="WebsitName" class="form-label">Navbar Name</label>
              <input type="text" name="WebsitName" value="{{$item->WebsitName}}" class=" form-control" id="WebsitName">
              @endforeach
            </div>
            
            
              <a type="submit" href="{{route('navbarId', $item->id)}}" class="btn btn-primary">Submit</a>
            </div>
          </form><!-- Vertical Form -->


        </div>
      </div>
  </main>
@endsection