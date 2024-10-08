@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Breakfast</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Breakfast</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Your Breakfast</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('BreakFastListEdit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$Breakfast->id}}">
            <div class="mb-3">
                <label for="foodPicture" class="form-label">Upload Food Picture</label>
                <input class="form-control @error('foodPicture') is-invalid @enderror" value="{{$Breakfast->foodPictue}}" type="file" id="foodPicture" name="foodPicture" accept="image/*">
                @error('foodPicture')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-12">
              <label for="foodPrice" class="form-label">Food Price</label>
              <input type="text" name="foodPrice" value="{{$Breakfast->foodPrice}}" class="@error('foodPrice') is-invalid @enderror form-control" id="foodPrice">
              @error('foodPrice')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col-12">
              <label for="foodName" class="form-label">Food name</label>
              <input type="text" name="foodName" value="{{$Breakfast->foodName}}" class="@error('foodName') is-invalid @enderror form-control" id="foodName">
              @error('foodName')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control @error('foodDetails') is-invalid @enderror" value="" name="foodDetails" placeholder="Leave a comment here" id="foodDetails" style="height: 100px;">{{$Breakfast->foodDetails}}</textarea>
                <label for="ServiceDetails">Food Details</label>
                @error('foodDetails')
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