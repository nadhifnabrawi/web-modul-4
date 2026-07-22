@extends('layouts.app')

@section('title', 'Tentang - Laravel App')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <h2 class="card-title text-dark fw-bold mb-3">Tentang Aplikasi</h2>
        <p class="card-text text-secondary">
            Aplikasi Laravel 10 ini dibangun sebagai bagian dari Praktikum Pemrograman Web.
        </p>
        <div class="row mt-4">
            <div class="col-md-6 mb-3">
                <div class="p-3 bg-light rounded border">
                    <h5 class="fw-bold text-primary"><i class="bi bi-cpu me-2"></i>Teknologi Digunakan</h5>
                    <ul class="list-unstyled mb-0">
                        <li><strong>Framework:</strong> Laravel 10 (PHP 8.1 FPM)</li>
                        <li><strong>Database:</strong> Neon DB (Cloud PostgreSQL)</li>
                        <li><strong>Container:</strong> Docker & Docker Compose</li>
                        <li><strong>Web Server:</strong> Nginx</li>
                        <li><strong>Frontend:</strong> Bootstrap 5</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="p-3 bg-light rounded border">
                    <h5 class="fw-bold text-success"><i class="bi bi-journal-check me-2"></i>Modul Praktikum</h5>
                    <ul class="list-unstyled mb-0">
                        <li>Bab 2: Connection String & Env DB</li>
                        <li>Bab 3: Docker & Nginx Containerization</li>
                        <li>Bab 4: Instalasi Laravel 10</li>
                        <li>Bab 5: Migration & Database Setup</li>
                        <li>Bab 6: Route, Controller & Blade Layout</li>
                        <li>Bab 7: CRUD Post Complete Feature</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
