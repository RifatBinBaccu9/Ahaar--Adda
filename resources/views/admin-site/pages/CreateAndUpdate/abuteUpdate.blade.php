@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update About </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update About</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update About Setting</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('aboutUpdatePush')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="image1">Image Top Left</label>
              <input type="file" name="image1" class="@error('image1') is-invalid @enderror form-control" id="image1">
              @error('image1')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="image2">Image Top Right</label>
              <input type="file" name="image2" class="@error('image2') is-invalid @enderror form-control" id="image2">
              @error('image2')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="image3">Image Bottom Left</label>
              <input type="file" name="image3" class="@error('image3') is-invalid @enderror form-control" id="image3">
              @error('image3')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="image4">Image bottom Right</label>
              <input type="file" name="image4" class="@error('image4') is-invalid @enderror form-control" id="image4">
              @error('image4')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="years">Years of Experience</label>
              <input type="text" name="years" class="@error('years') is-invalid @enderror form-control" id="years">
              @error('years')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="chefs">Popular Master Chefs</label>
              <input type="text" name="chefs" class="@error('chefs') is-invalid @enderror form-control" id="chefs">
              @error('chefs')
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