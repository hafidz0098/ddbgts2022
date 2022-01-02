@extends('layouts.frontend.header')
@section('content')

<section id="blog" class="blog section-bg-berita">

    <div class="section-title pd-90" data-aos="fade-up">
        <h2>Berita</h2>
    </div>

    <!--container---------------->
    <div class="blog-container" data-aos="fade-up">
        @if ($posts->count())
        @foreach ($posts as $post)

        <div class="blog-box">

            <!--img---->
            <div class="blog-img">
                <img src="{{ $post->image }}" alt="blog">
            </div>

            <!--text--->
            <div class="blog-text">
                <span class="mb-3">{{ $post->created_at->diffForHumans() }}</span>
                <a href="/berita/{{ $post->slug }}" class="blog-title">{{ $post->title }}</a>
                <p>{{ $post->excerpt }}</p>
                <a href="/berita/{{ $post->slug }}">Baca Selengkapnya</a>
            </div>

        </div>
        @endforeach
        @else
        <p class="blog-container text-center fs-3 p-cust" style="padding-bottom: 200px">No Post Found!</p>
        @endif
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</section>

<script src="//code.tidio.co/6q3xbzy0oztl4m0kpcw2gbdnoiaope6k.js" async></script>

@endsection