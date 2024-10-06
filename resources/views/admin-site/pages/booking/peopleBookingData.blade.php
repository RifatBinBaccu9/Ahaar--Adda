@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>add Booking People Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">add Booking People Data</li>
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
                    <th>People</th>
                    <th>Action</th>
                </tr>
            </thead>
              <tbody>
                @foreach ($peopleView as $item)
                <tr>
                    <td>{{$item->people}}</td>
                    <td>
                        <!-- Update Button -->
                        <a href="{{route('addbookingPeopleUpdate', $item->id)}}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Update
                        </a>
                        
                        <!-- Delete Button -->
                        <a href="{{route('TestimonialListdelete', $item->id)}}" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete
                        </a>
                    </td>    
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