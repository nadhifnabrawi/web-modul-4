@extends('layouts.app')

@section('title', 'Beranda - Laravel App')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold text-primary">Selamat Datang di Aplikasi Laravel!</h1>
        <p class="col-md-8 fs-4 text-secondary">
            Aplikasi ini dikembangkan untuk memenuhi tugas praktikum Laravel 10 yang terhubung ke database cloud Neon DB (PostgreSQL) menggunakan Docker environment.
        </p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{ route('posts.index') }}" role="button">
            <i class="bi bi-file-post me-2"></i>Kelola Post (CRUD)
        </a>
        <a class="btn btn-outline-secondary btn-lg ms-2" href="{{ url('/about') }}" role="button">
            Tentang Aplikasi
        </a>
    </div>
</div>
@endsection
