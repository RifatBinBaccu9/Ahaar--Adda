@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Testimonial</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Testimonial</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Your Testimonial</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('TestimonialListEdit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$TestimonialStorage->id}}">
            <div class="mb-3">
                <label for="TestimonialPicture" class="form-label">Upload Picture</label>
                <input value="{{asset($TestimonialStorage->TestimonialPicture)}}" class="form-control @error('TestimonialPicture') is-invalid @enderror" type="file" id="TestimonialPicture" name="TestimonialPicture" accept="image/*">
                @error('TestimonialPicture')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-12">
              <label for="TestimonialName" class="form-label">Member Name</label>
              <input value="{{$TestimonialStorage->TestimonialName}}" type="text" name="TestimonialName" class="@error('TestimonialName') is-invalid @enderror form-control" id="TestimonialName">
              @error('TestimonialName')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col-12">
              <label for="TestimonialProfesstion" class="form-label">Member Designation</label>
              <input value="{{$TestimonialStorage->TestimonialProfesstion}}" type="text" name="TestimonialProfesstion" class="@error('TestimonialProfesstion') is-invalid @enderror form-control" id="TestimonialProfesstion">
              @error('TestimonialProfesstion')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control @error('TestimonialDetails') is-invalid @enderror" name="TestimonialDetails" placeholder="Leave a comment here" id="TestimonialDetails" style="height: 100px;">{{$TestimonialStorage->TestimonialDetails}}</textarea>
                <label for="TestimonialDetails">Food Details</label>
                @error('TestimonialDetails')
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