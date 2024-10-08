@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Footer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Footer</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Footer</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('footerUpdatePush')}}" method="POST" >
            @csrf
            <div class="form-group">
              <label for="FooterAddress">Footer Address</label>
              <input type="text" name="FooterAddress" class="@error('FooterAddress') is-invalid @enderror form-control" id="FooterAddress">
              @error('FooterAddress')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="FooterPhone">Footer Phone</label>
              <input type="text" name="FooterPhone" class="@error('FooterPhone') is-invalid @enderror form-control" id="FooterPhone">
              @error('FooterPhone')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="FooterEmail">Footer Email</label>
              <input type="text" name="FooterEmail" class="@error('FooterEmail') is-invalid @enderror form-control" id="FooterEmail">
              @error('FooterEmail')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
              <label for="OpeningDayOption1">Opening Day Option1</label>
              <input type="text" name="OpeningDayOption1" class="@error('OpeningDayOption1') is-invalid @enderror form-control" id="OpeningDayOption1">
              @error('OpeningDayOption1')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="OpeningTimeOption1">Opening Time Option1</label>
                <input type="text" name="OpeningTimeOption1" class="@error('OpeningTimeOption1') is-invalid @enderror form-control" id="OpeningTimeOption1">
                @error('OpeningTimeOption1')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="OpeningDayOption2">Opening Day Option2</label>
                <input type="text" name="OpeningDayOption2" class="@error('OpeningDayOption2') is-invalid @enderror form-control" id="OpeningDayOption2">
                @error('OpeningDayOption2')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="OpeningTimeOption2">Opening Time Option2</label>
                <input type="text" name="OpeningTimeOption2" class="@error('OpeningTimeOption2') is-invalid @enderror form-control" id="OpeningTimeOption2">
                @error('OpeningTimeOption2')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
              <label for="FooterNewsletter">Footer Newsletter</label>
              <input type="text" name="FooterNewsletter" class="@error('FooterNewsletter') is-invalid @enderror form-control" id="FooterNewsletter">
              @error('FooterNewsletter')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form><!-- Vertical Form -->
        </div>
      </div>
  </main>
@endsection