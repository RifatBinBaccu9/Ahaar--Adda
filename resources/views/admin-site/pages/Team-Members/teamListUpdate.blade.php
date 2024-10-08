@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Team Member</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Team Member</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Your Team Member</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('TeamListEdit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$teamStorage->id}}">
            <div class="mb-3">
                <label for="MemberPicture" class="form-label">Upload Team Member Picture</label>
                <input  value="{{$teamStorage->MemberPicture}}"  class="form-control @error('MemberPicture') is-invalid @enderror" type="file" id="MemberPicture" name="MemberPicture" accept="image/*">
                @error('MemberPicture')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-12">
              <label for="MemberName" class="form-label">Member Name</label>
              <input type="text" value="{{$teamStorage->MemberName}}" name="MemberName" class="@error('MemberName') is-invalid @enderror form-control" id="MemberName">
              @error('MemberName')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col-12">
              <label for="MemberDesignation" class="form-label">Member Designation</label>
              <input type="text" value="{{$teamStorage->MemberDesignation}}" name="MemberDesignation" class="@error('MemberDesignation') is-invalid @enderror form-control" id="MemberDesignation">
              @error('MemberDesignation')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{$teamStorage->FacebookLink}}" class="form-control @error('FacebookLink') is-invalid @enderror" name="FacebookLink" id="FacebookLink" >
                <label for="FacebookLink">Facebook Link</label>
                @error('FacebookLink')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{$teamStorage->TuitterLink}}" class="form-control @error('TuitterLink') is-invalid @enderror" name="TuitterLink" id="TuitterLink">
                <label for="TuitterLink">Tuitter Link</label>
                @error('TuitterLink')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{$teamStorage->InstagramLink}}" class="form-control @error('InstagramLink') is-invalid @enderror" name="InstagramLink" id="InstagramLink">
                <label for="InstagramLink">Instagram Link</label>
                @error('InstagramLink')
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