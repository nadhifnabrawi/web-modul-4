@extends('layouts.app')

@section('title', $post->title . ' - Laravel App')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3 border-bottom">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="badge {{ $post->status === 'published' ? 'bg-success' : 'bg-secondary' }}">
                        {{ ucfirst($post->status) }}
                    </span>
                    <small class="text-muted">
                        <i class="bi bi-clock me-1"></i>
                        {{ $post->published_at ? 'Dipublikasikan: ' . $post->published_at->format('d M Y, H:i') : 'Dibuat: ' . $post->created_at->format('d M Y, H:i') }}
                    </small>
                </div>
                <h3 class="fw-bold text-dark mb-1">{{ $post->title }}</h3>
                <small class="text-muted">Slug: <code>{{ $post->slug }}</code></small>
            </div>
            <div class="card-body p-4 fs-5 lh-base text-secondary">
                {!! nl2br(e($post->body)) !!}
            </div>
            <div class="card-footer bg-light py-3 d-flex justify-content-between">
                <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Kembali ke Daftar Post
                </a>
                <div>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">
                        <i class="bi bi-pencil me-1"></i>Edit
                    </a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus post ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash me-1"></i>Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
