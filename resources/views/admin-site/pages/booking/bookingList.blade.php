@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Booking Data List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Booking Data List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="row">
      <div class="col-12">
        <div class="card p-4">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date $ Time</th>
                    <th>People</th>
                    <th>message</th>
                </tr>
            </thead>
              <tbody>
                @foreach ($BookingView as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->datetime}}</td>
                    <td>{{$item->select}}</td>
                    <td>{{$item->message}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

  </main><!-- End #main -->
@endsection