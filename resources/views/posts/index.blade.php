@extends('layouts.app')

@section('content')
<div class="row mt-5 pt-5">
    <div class="col-md-3">
        <h4>Filter</h4>
        <form method="GET" action="{{ route('posts.index') }}">
            <div class="mb-3">
                <label for="search" class="form-label">Cari Judul</label>
                <input type="text" name="search" id="search" class="form-control" placeholder="Cari judul..." value="{{ request('search') }}">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select name="category" id="category" class="form-control">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-dark w-100">Cari</button>
        </form>
    </div>

    <div class="col-md-9">
        <h1>Daftar Postingan</h1>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <h6 class="card-subtitle mb-2 text-muted">Kategori: {{ $post->category->name }}</h6>
                    <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-link text-secondary">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            <ul class="pagination pagination-sm">
                {{ $posts->links('pagination::bootstrap-4') }}
            </ul>
        </div>
    </div>
</div>
@endsection
