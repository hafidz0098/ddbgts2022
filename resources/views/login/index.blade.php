@extends('layouts.dash')

@section('container')

<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-7 col-md-9">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        </div>
    @endif

      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
        </div>
      @endif

      <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('https://live.staticflickr.com/65535/51705543856_a128a89c68_c.jpg')"></div>
                  <div class="col-lg-6">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Welcome Admin</h1>
                          </div>
                          <form class="user" action="/login" method="POST">
                          @csrf
                              <div class="form-group">
                                  <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email Address..." autofocus value="{{ old('email') }}">
                                      @error('email')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                      @enderror
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                      id="password" name="password" placeholder="Password">
                                      @error('password')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                      @enderror
                              </div>
                              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>

</div>

@endsection