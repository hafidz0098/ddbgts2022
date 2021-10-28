@extends('layouts.main')

@section('container')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Pendaftaran</h1>
</div>
<div class="row">
    <div class="col-lg-6">
        @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                </div>
        @endif
        <form method="POST" action="/daftar" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama..." autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan alamat email..." autofocus value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nomor_wa" class="form-label">Nomor Whatsapp</label>
                <input type="number" class="form-control @error('nomor_wa') is-invalid @enderror" id="nomor_wa" name="nomor_wa" placeholder="Masukkan Nomor Whatsapp..." autofocus value="{{ old('nomor_wa') }}">
                  @error('nomor_wa')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>
            <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan asal sekolah..." autofocus value="{{ old('asal_sekolah') }}">
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
                <label for="formFile" class="form-label">Bukti Transfer</label>
                <input class="form-control" type="file" id="bukti_tf" name="bukti_tf">
                @error('bukti_tf')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</div>

@endsection