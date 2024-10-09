@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Testimonial</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Add Testimonial</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Your Testimonial</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('addTestimonialPush')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="TestimonialPicture" class="form-label">Upload Picture</label>
                <input class="form-control @error('TestimonialPicture') is-invalid @enderror" type="file" id="TestimonialPicture" name="TestimonialPicture" accept="image/*">
                @error('TestimonialPicture')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-12">
              <label for="TestimonialName" class="form-label">Testimonial Name</label>
              <input type="text" name="TestimonialName" class="@error('TestimonialName') is-invalid @enderror form-control" id="TestimonialName">
              @error('TestimonialName')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col-12">
              <label for="TestimonialProfesstion" class="form-label">Testimonial Professon</label>
              <input type="text" name="TestimonialProfesstion" class="@error('TestimonialProfesstion') is-invalid @enderror form-control" id="TestimonialProfesstion">
              @error('TestimonialProfesstion')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control @error('TestimonialDetails') is-invalid @enderror" name="TestimonialDetails" placeholder="Leave a comment here" id="TestimonialDetails" style="height: 100px;"></textarea>
                <label for="TestimonialDetails">Details</label>
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