@extends('layouts.dash')

@section('container')

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
      <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
              <div class="p-5">
                  <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                  </div>
                  <form action="/register" method="POST" class="user">
                    @csrf
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama" value="{{ old('name') }}">
                          @error('name')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" value="{{ old('username') }}">
                          @error('username')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
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
                      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                  </form>
                  <hr>
                  <div class="text-center">
                      <a class="small" href="/login">Already have an account? Login!</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection