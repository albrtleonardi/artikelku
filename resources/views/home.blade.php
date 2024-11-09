@extends('layouts.app')

@section('content')
<div class="banner position-relative text-center d-flex align-items-center justify-content-center mt-5 pt-5" style="height: 60vh; background-image: url('https://images.unsplash.com/photo-1691427195741-ec23944c2df0?q=80&w=3135&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
    <div class="position-relative text-white">
        <h1 class="display-4 fw-bold">Selamat Datang di Artikelku</h1>
        <p class="lead">Tempat terbaik untuk membaca artikel menarik dan informatif!</p>
        <a href="{{ route('posts.index') }}" class="btn btn-dark btn-lg mt-3">Lihat Artikel</a>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4">Artikel Terbaru</h2>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-dark">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="container my-5 py-5 bg-light text-center">
    <h2 class="mb-4">Tentang Artikelku</h2>
    <p class="lead mx-auto" style="max-width: 800px;">
        Artikelku adalah platform yang menyediakan berbagai artikel menarik dan informatif dari berbagai topik. 
        Dibuat untuk memberikan inspirasi, pengetahuan, dan hiburan bagi para pembaca.
    </p>
</div>


@endsection
