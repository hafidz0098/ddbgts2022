@extends('dashboard.layouts.maindash')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peserta Gagal</h1>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
    @endif
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Peserta Gagal</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                      <thead class="p-3 mb-2 bg-danger text-white">
                          <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Nomor WA</th>
                              <th>Asal Sekolah</th>
                              <th>Keminatan</th>
                              <th>Diverifikasi Oleh</th>
                              <th>Waktu Verifikasi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pesertas as $peserta)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $peserta->name }}</td>
                              <td>{{ $peserta->email }}</td>
                              <td>{{ $peserta->nomor_wa }}</td>
                              <td>{{ $peserta->asal_sekolah }}</td>
                              <td>{{ $peserta->rumpun->name }}</td>
                              <td>{{ $peserta->verified_by }}</td>
                              <td>{{ $peserta->updated_at }}</td>
                          </tr>  
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
@endsection