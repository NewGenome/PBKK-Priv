@extends('layouts.app')

@section('title', 'Profil Mahasiswa - ITS')

@section('content')
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white py-3 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fw-bold text-dark">Detail Profil Mahasiswa</h5>
    </div>
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                    <i class="fa-solid fa-user-graduate fs-1"></i>
                </div>
            </div>
            <div class="col-md-9">
                <table class="table table-borderless mb-0">
                    <tr>
                        <td class="text-muted" style="width: 140px;">NRP:</td>
                        <td>
                            <code class="fw-bold fs-5 text-primary">{{ $nrp }}</code>
                            <span class="badge bg-success ms-2">Terverifikasi Sesuai Regex</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">Nama Mahasiswa:</td>
                        <td class="fw-semibold text-dark">Felix Aldorino</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Tanggal Lahir:</td>
                        <td class="fw-semibold text-dark">26 Juli 2006</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Tempat Lahir:</td>
                        <td class="fw-semibold text-dark">Jakarta</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Departemen:</td>
                        <td class="fw-semibold text-dark">Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Fakultas:</td>
                        <td class="fw-semibold text-dark">FTEIC - ITS Surabaya</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Email Kampus:</td>
                        <td><code>{{ $nrp }}@student.its.ac.id</code></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection