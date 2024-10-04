@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Add Service</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Your Service</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('addServicePush')}}" method="POST">
            @csrf      
            <div class="col-12">
              <label for="ServiceIcon" class="form-label">Service Icon</label>
              <input type="text" name="ServiceIcon" class="@error('ServiceIcon') is-invalid @enderror form-control" id="ServiceIcon">
              @error('ServiceIcon')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col-12">
              <label for="ServiceTitle" class="form-label">Service Title</label>
              <input type="text" name="ServiceTitle" class="@error('ServiceTitle') is-invalid @enderror form-control" id="ServiceTitle">
              @error('ServiceTitle')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control @error('ServiceDetails') is-invalid @enderror" name="ServiceDetails" placeholder="Leave a comment here" id="ServiceDetails" style="height: 100px;"></textarea>
                <label for="ServiceDetails">Service Details</label>
                @error('ServiceDetails')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
  </main>
@endsection