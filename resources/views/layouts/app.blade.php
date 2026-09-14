<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ITS Academic Portal')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
        .navbar-its {
            background-color: forestgreen;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark navbar-its shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ route('home') }}">
                <span>Academy Profile</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-1">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fa-solid fa-house me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.detail', ['nrp' => '5025241162']) }}">
                            <i class="fa-solid fa-user-graduate me-1"></i> Profil Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agent.idea') }}">
                            <i class="fa-solid fa-robot me-1"></i> Agentic AI
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kalkulator.ipk', ['ip1' => '3.85', 'ip2' => '3.92']) }}">
                            <i class="fa-solid fa-calculator me-1"></i> Hitung IPK
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Injection -->
    <main class="container py-4 flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="bg-white border-top py-3 text-center text-muted small mt-auto">
        &copy; {{ date('Y') }} Institut Teknologi Sepuluh Nopember (ITS) &bull; Pemrograman Berbasis Kerangka Kerja
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>