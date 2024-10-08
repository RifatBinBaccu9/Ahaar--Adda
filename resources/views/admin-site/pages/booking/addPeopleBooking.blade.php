@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Set Number of people</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Add Set Number of people</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Set Number of people</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('bookingPeoplePush')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              <label for="people" class="form-label">Number of people</label>
              <input type="text" name="people" class="@error('people') is-invalid @enderror form-control" id="people">
              @error('people')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
  </main>
@endsection