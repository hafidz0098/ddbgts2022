@extends('layouts.frontend.header')

@section('content')

    <section id="isi-berita" class="isi-berita section-bg-berita">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 col-md-8">
                    <img src="{{ $post->image }}" class="img-fluid w-100 post-img">
                    <div class="card bg">
    
                        <article class="my-3">
                            <h1 class="mt-3" style="margin-bottom: 20px">{{ $post->title }}</h1>
                            {!! $post->body !!}
                        </article>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <script src="//code.tidio.co/6q3xbzy0oztl4m0kpcw2gbdnoiaope6k.js" async></script>
    
@endsection