
@extends('layouts.main')
@section('container')
<h1>Halaman {{ $title }}</h1>
<h3>{{ $name }}</h3>
<h3>{{ $email }}</h3>
<img src="{{ $image }}" alt="{{ $name }}" width ="200" class="img-thumbnail rounded-circle">
@endsection