@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Service Data List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Service Data List</li>
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
                    <th>Service Icon</th>
                    <th>Service Title</th>
                    <th>Service Details</th>
                    <th>Action</th>
                </tr>
            </thead>
              <tbody>
                @foreach ($serviceView as $item)
                <tr>
                    <td>{{$item->ServiceIcon}}</td>
                    <td>{{$item->ServiceTitle}}</td>
                    <td>{{$item->ServiceDetails}}</td>
                    <td>
                        <!-- Update Button -->
                        <a href="{{ route('serviceListUpdate', $item->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Update
                        </a>
            
                        <!-- Delete Button -->
                        <a href="{{ route('serviceListDelete', $item->id) }}" class="btn btn-danger btn-sm">
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