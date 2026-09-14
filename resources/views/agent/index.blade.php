@extends('layouts.app')

@section('title', 'Agentic AI Platform - ITS')

@section('content')
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold text-dark">Proyeksi Platform Agentic AI</h5>
    </div>
    <div class="card-body p-4">
        <div class="p-4 bg-light rounded-3 mb-3 border">
            <span class="text-muted small">Tema Agent Active:</span>
            <h3 class="text-primary fw-bold mb-2 mt-1">{{ $tema }}</h3>
            <p class="text-secondary mb-0">
                This project explores the implementation of Agentic AI systems for solving complex problems 
                in the field of informatics engineering
            </p>
        </div>
    </div>
</div>
@endsection