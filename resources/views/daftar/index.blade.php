@extends('layouts.frontend.header')
@section('content')
<section id="daftar" class="daftar section-bg-regis">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <img src="frontend/assets/img/regis.webp">
          </div>
            <div class="col-lg-8 align-center">
              <div class="section-title">
                <h2>Form Pendaftaran</h2>
              </div>
              @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                </div>
              @endif
              @if(session()->has('daftarError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('daftarError') }}
                </div>
              @endif
                <form method="POST" action="/daftar" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Silahkan masukkan nama anda">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Silahkan masukkan email anda">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nomor_wa" class="form-label">Nomor Whatsapp</label>
                        <input type="number" class="form-control @error('nomor_wa') is-invalid @enderror" id="nomor_wa" name="nomor_wa" value="{{ old('nomor_wa') }}" placeholder="Silahkan masukkan nomor whatsapp anda">
                        @error('nomor_wa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}" placeholder="Silahkan masukkan asal sekolah anda">
                        @error('asal_sekolah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rumpun" class="form-label">Kategori TRYOUT</label>
                        <select class="form-select" name="rumpun_id">
                            @foreach ($rumpuns as $rumpun)
                                @if (old('rumpun_id') == $rumpun->id)
                                    <option value="{{ $rumpun->id }}" selected>{{ $rumpun->name }}</option>
                                @else
                                    <option value="{{ $rumpun->id }}">{{ $rumpun->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Bukti Bayar</label>
                        <input class="form-control @error('bukti_tf') is-invalid @enderror" type="file" id="bukti_tf" name="bukti_tf">
                        @error('bukti_tf')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin daftar? Pastikan semua data yang diinput sudah sesuai')">Daftar</button>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection