@extends('dashboard.layouts.maindash')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kirim Tryout</h1>
</div>
<div class="row">
    <div class="col-lg-8">
        @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                </div>
        @endif
        <form method="POST" action="/dashboard/tryout">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Kirim ke email</label>
                <select class="custom-select" name="email">
                    <option value="" disabled selected>Pilih email peserta...</option>
                    @foreach ($pesertas as $peserta)
                    @if (old('email') == $peserta->email)
                        <option value="{{ $peserta->email }}" selected>{{ $peserta->email }}</option>
                    @else
                        <option value="{{ $peserta->email }}">{{ $peserta->email }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Masukkan subject..." autofocus value="Tryout DDBGTS 2022" >
                @error('subject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username_to" class="form-label">Username Tryout</label>
                <input type="text" class="form-control @error('username_to') is-invalid @enderror" id="username_to" name="username_to" placeholder="Masukkan username to..." autofocus >
                  @error('username_to')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="password_to" class="form-label">Password Tryout</label>
                <input type="text" class="form-control @error('password_to') is-invalid @enderror" id="password_to" name="password_to" placeholder="Masukkan username to..." autofocus >
                  @error('password_to')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <input type="text" class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan" placeholder="Masukkan pesan..." autofocus value="Halo, Kami mengundang anda untuk mengikuti Tryout DDBGTS 2022" >
                  @error('pesan')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="nama_acara" class="form-label">Nama Acara</label>
                <input type="text" class="form-control @error('nama_acara') is-invalid @enderror" id="nama_acara" name="nama_acara" placeholder="Masukkan nama acara" autofocus value="Tryout DDBGTS 2022" >
                @error('nama_acara')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" placeholder="Masukkan tanggal" autofocus value="08 November 2022" >
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Waktu</label>
                <input type="text" class="form-control @error('jam') is-invalid @enderror" id="jam" name="jam" placeholder="Masukkan jam" autofocus value="10.00 Wita - Selesai" >
                @error('jam')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Masukkan lokasi" autofocus value="Zoom Meeting" >
                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="meeting_id" class="form-label">Meeting ID</label>
                <input type="text" class="form-control @error('meeting_id') is-invalid @enderror" id="meeting_id" name="meeting_id" placeholder="Masukkan meeting id" autofocus value="876 7302 8345" >
                @error('meeting_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="meeting_passcode" class="form-label">Meeting Passcode</label>
                <input type="text" class="form-control @error('meeting_passcode') is-invalid @enderror" id="meeting_passcode" name="meeting_passcode" placeholder="Masukkan meeting passcode" autofocus value="784757" >
                @error('meeting_passcode')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="link_zoom" class="form-label">Meeting Passcode</label>
                <input type="text" class="form-control @error('link_zoom') is-invalid @enderror" id="link_zoom" name="link_zoom" placeholder="Masukkan link zoom" autofocus value="https://us02web.zoom.us/j/87673028345?pwd=Ny9WRDgzUUxUYlVvUkhnQUpyNEJvZz09" >
                @error('link_zoom')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>
@endsection