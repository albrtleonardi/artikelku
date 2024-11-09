@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5"> 
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>{{ $post->title }}</h1>
            <p class="text-muted">
                Kategori: <strong>{{ $post->category->name }}</strong> |
                Diposting pada: <strong>{{ $post->created_at->format('d M Y') }}</strong>
            </p>
            <hr>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Postingan</a>
        </div>
    </div>
</div>
@endsection
