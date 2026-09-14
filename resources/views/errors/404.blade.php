@extends('layouts.app')

@section('title', '404 - Halaman Tidak Ditemukan')

@section('content')
<div class="text-center py-5">
    <h1 class="display-1 fw-bold text-danger mb-0">404</h1>
    <h3 class="fw-bold text-dark mt-2">Halaman Tidak Ditemukan</h3>
    <p class="text-muted max-w-lg mx-auto mb-4">
        Maaf, rute URL yang Anda minta tidak terdaftar di file <code>routes/web.php</code> atau tidak memenuhi syarat validasi regex parameter.
    </p>
    <div class="mb-4">
        <span class="badge bg-warning text-dark px-3 py-2">
            <i class="fa-solid fa-shield-halved me-1"></i> Ditangani secara otonom oleh Route::fallback()
        </span>
    </div>
    <div>
        <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2">
            <i class="fa-solid fa-house me-1"></i> Kembali ke Halaman Utama
        </a>
    </div>
</div>
@endsection