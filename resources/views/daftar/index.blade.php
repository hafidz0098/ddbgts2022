@extends('layouts.main')

@section('container')
@if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        </div>
 @endif
<div class="row">
    <div class="col-lg-6">
        <form method="POST" action="/daftar" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama..." autofocus value="{{ old('name') }}">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan alamat email..." autofocus value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="asal" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control @error('asal') is-invalid @enderror" id="asal" name="asal" placeholder="Masukkan asal sekolah..." autofocus value="{{ old('asal') }}">
            </div>
            <div class="mb-3">
                <label for="rumpun" class="form-label">Kategori TRYOUT</label>
                <select class="form-select" name="rumpun_id">
                    <option selected>Pilih</option>
                    <option value="1">Saintek</option>
                    <option value="2">Soshum</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Bukti Transfer</label>
                <input class="form-control" type="file" id="bukti" name="bukti">
              </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</div>

@endsection