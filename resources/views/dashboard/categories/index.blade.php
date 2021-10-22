@extends('dashboard.layouts.maindash')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
    @endif
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Post Categories</h6>
          </div>
          <div class="card-body">
            <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new categories</a>
              <div class="table-responsive">
                  <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Category Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($categories as $category)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $category->name }}</td>
                              <td>
                                  <a href="/dashboard/categories/{{ $category->slug }}/edit" class=" btn btn-sm btn-warning btn-bordred"><i class="fa fa-edit" title="Edit"></i></a>
                                  <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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