@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Carousel</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Carousel </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update CarouselSetting</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('carouselUpdatePush')}}" method="POST" >
            @csrf
            <div class="form-group">
              <label for="carouselName">Carousel Name</label>
              <input type="text" name="carouselName" class="@error('carouselName') is-invalid @enderror form-control" id="carouselName">
              @error('carouselName')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea type="text" name="description" class="@error('description') is-invalid @enderror form-control" id="description"></textarea>
              @error('description')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
          </form><!-- Vertical Form -->
        </div>
      </div>
  </main>
@endsection