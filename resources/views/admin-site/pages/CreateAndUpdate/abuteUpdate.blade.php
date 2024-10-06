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
              <input type="file" name="image1" class="form-control" id="image1">
          </div>
            <div class="form-group">
              <label for="image2">Image Top Right</label>
              <input type="file" name="image2" class="form-control" id="image2">
          </div>
            <div class="form-group">
              <label for="image3"></label>
              <input type="file" name="image3" class="form-control" id="image3">
          </div>
            <div class="form-group">
              <label for="image4">Image Bottom Left</label>
              <input type="file" name="image4" class="form-control" id="image4">
          </div>
            <div class="form-group">
              <label for="years">Image bottom Right</label>
              <input type="text" name="years" class="form-control" id="years">
          </div>
            <div class="form-group">
              <label for="chefs">Popular Master Chefs</label>
              <input type="text" name="chefs" class="form-control" id="chefs">
          </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea type="text" name="description" class="form-control" id="description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
          </form><!-- Vertical Form -->
        </div>
      </div>
  </main>
@endsection