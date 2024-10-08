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
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
              <tbody>
                @foreach ($BookingView as $item)
                <tr>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->datetime}}</td>
                    <td>{{$item->select}}</td>
                    <td>{{$item->message}}</td>
                    <td>

                      @if ($item->status == 'accepted')
                          <h5 style="color: green;">Accept</h5>
                      @elseif ($item->status == 'rejected')
                          <h5 style="color: red;">Reject</h5>
                      @else
                          <h5 style="color: orange;">Pending</h5>
                      @endif

                    </td>
                    <td>
                      @if ($item->status === 'rejected')
                        <form action="{{ route('posts.accept', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Accept</button>
                        </form>
                        @elseif ($item->status === 'accepted')
                        <form action="{{ route('posts.reject', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                        </form>
                      @else
                      <form action="{{ route('posts.accept', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit"  class="btn btn-success btn-sm">Accept</button>
                    </form>
                    <form action="{{ route('posts.reject', $item->id) }}" method="POST" style="display:inline;">
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                  </form>
                        @endif
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