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
          <h5 class="card-title">Update Footer Setting</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('footerUpdatePush')}}" method="POST" >
            @csrf
            <div class="form-group">
              <label for="FooterAddress">Footer Address</label>
              <input type="text" name="FooterAddress" class="form-control" id="FooterAddress">
          </div>
            <div class="form-group">
              <label for="FooterPhone">Footer Phone</label>
              <input type="text" name="FooterPhone" class="form-control" id="FooterPhone">
          </div>
            <div class="form-group">
              <label for="FooterEmail">Footer Email</label>
              <input type="text" name="FooterEmail" class="form-control" id="FooterEmail">
          </div>
          <div class="form-group">
              <label for="OpeningDayOption1">Opening Day Option1</label>
              <input type="text" name="OpeningDayOption1" class="form-control" id="OpeningDayOption1">
            </div>
            <div class="form-group">
                <label for="OpeningTimeOption1">Opening Time Option1</label>
                <input type="text" name="OpeningTimeOption1" class="form-control" id="OpeningTimeOption1">
            </div>
            <div class="form-group">
                <label for="OpeningDayOption2">Opening Day Option2</label>
                <input type="text" name="OpeningDayOption2" class="form-control" id="OpeningDayOption2">
            </div>
            <div class="form-group">
                <label for="OpeningTimeOption2">Opening Time Option2</label>
                <input type="text" name="OpeningTimeOption2" class="form-control" id="OpeningTimeOption2">
            </div>
            <div class="form-group">
              <label for="FooterNewsletter">Footer Newsletter</label>
              <input type="text" name="FooterNewsletter" class="form-control" id="FooterNewsletter">
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form><!-- Vertical Form -->
        </div>
      </div>
  </main>
@endsection