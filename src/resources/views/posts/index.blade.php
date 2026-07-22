@extends('layouts.app')

@section('title', 'Daftar Post - Laravel App')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark mb-0"><i class="bi bi-file-post me-2 text-primary"></i>Daftar Post</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i>Tambah Post Baru
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" style="width: 5%">#</th>
                        <th scope="col" style="width: 30%">Judul</th>
                        <th scope="col" style="width: 20%">Slug</th>
                        <th scope="col" style="width: 15%">Status</th>
                        <th scope="col" style="width: 15%">Dipublikasikan</th>
                        <th scope="col" class="text-center" style="width: 15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration + ($posts->currentPage() - 1) * $posts->perPage() }}</td>
                            <td class="fw-semibold">{{ $post->title }}</td>
                            <td><code>{{ $post->slug }}</code></td>
                            <td>
                                @if ($post->status === 'published')
                                    <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Published</span>
                                @else
                                    <span class="badge bg-secondary"><i class="bi bi-clock me-1"></i>Draft</span>
                                @endif
                            </td>
                            <td>
                                {{ $post->published_at ? $post->published_at->format('d M Y, H:i') : '-' }}
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-info" title="Detail">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus post ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                Belum ada post tersimpan. Silakan tambah post baru!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if ($posts->hasPages())
        <div class="card-footer bg-white border-top-0 pt-3">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
