@extends('layouts.frontend.header')

@section('content')

    <section id="isi-berita" class="isi-berita section-bg">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 col-md-8">
                    
                    <div class="card">
                        <div style="max-height: 300px; overflow:hidden;"  class="text-center">
                            <img src="{{ $post->image }}" class="img-fluid">
                        </div>
    
                        <article class="my-3">
                            <h1 class="mt-3" style="margin-bottom: 20px">{{ $post->title }}</h1>
                            {!! $post->body !!}
                        </article>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
@endsection