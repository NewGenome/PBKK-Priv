@extends('layouts.app')

@section('title', 'Kalkulator IPK - ITS')

@section('content')
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold text-dark">Kalkulator Portofolio Akademis</h5>
    </div>
    <div class="card-body p-4">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-4 border rounded-3 bg-light">
                    <span class="text-muted small">IP Semester 1</span>
                    <h3 class="fw-bold text-dark mt-2 mb-0">{{ number_format((float)$ip1, 2) }}</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-3 bg-light">
                    <span class="text-muted small">IP Semester 2</span>
                    <h3 class="fw-bold text-dark mt-2 mb-0">{{ number_format((float)$ip2, 2) }}</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border border-primary rounded-3 bg-primary-subtle">
                    <span class="text-primary small fw-semibold">Rata-Rata IPK</span>
                    <h2 class="fw-bold text-primary mt-2 mb-0">{{ $ipk }}</h2>
                </div>
            </div>
        </div>

       
    </div>
</div>
@endsection