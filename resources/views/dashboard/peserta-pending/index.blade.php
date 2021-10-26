@extends('dashboard.layouts.maindash')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peserta Pending</h1>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
    @endif
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Peserta Pending</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Asal Sekolah</th>
                              <th>Keminatan</th>
                              <th>Bukti TF</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pesertas as $peserta)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $peserta->name }}</td>
                              <td>{{ $peserta->email }}</td>
                              <td>{{ $peserta->asal_sekolah }}</td>
                              <td>{{ $peserta->rumpun->name }}</td>
                              <td>{{ $peserta->bukti_tf }}</td>
                              <td>
                                  <form action="/dashboard/peserta-pending/{{ $peserta->id }}" method="post" class="d-inline">
                                      @method('delete')
                                      @csrf
                                    <button class="btn btn-sm btn-danger btn-bordred" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" title="Delete"></i></button>
                                  </form>
                              </td>  
                          </tr>  
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
@endsection