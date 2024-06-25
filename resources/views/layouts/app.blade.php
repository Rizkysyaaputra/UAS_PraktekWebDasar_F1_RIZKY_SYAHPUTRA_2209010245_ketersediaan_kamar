<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kamar Rumah Sakit - @yield('title', 'Beranda')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #3368a5;
            --secondary-blue: #c4c4c4be;
            --light-blue: #c4e0f9;
            --white: #ffffff;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--white);
            color: var(--primary-blue);
            line-height: 1.6;
            padding-top: 70px;
        }
        
        .navbar {
            background-color: var(--primary-blue);
            box-shadow: 0 2px 10px rgba(0,0,0,.1);
            padding: 1rem 0;
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--white) !important;
        }
        
        .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem !important;
            border-bottom: 2px solid transparent;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--secondary-blue) !important;
            border-bottom: 2px solid var(--secondary-blue);
        }
        
        .main-container {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgb(255, 255, 255);
            padding: 2rem;
            margin-top: 2rem;
        }
        
        
        
        .alert {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgb(255, 255, 255);
        }
        
        .btn-primary {
            background-color: var(--secondary-blue);
            border-color: var(--secondary-blue);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            transform: translateY(-2px);
            box-shadow: 0 4px 6px #f5f5f5;
        }

        /* Table styles */
        .table {
            margin-top: 1rem;
        }

        .table th {
            background-color: var(--primary-blue);
            color: var(--white);
        }

        .table-hover tbody tr:hover {
            background-color: var(--light-blue);
        }
    </style>
    
    @yield('styles')
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">RUMAH SAKIT RIZKY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('tipe_kamar*') ? 'active' : '' }}" href="{{ route('tipe_kamar.index') }}">TIPE KAMAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kamar*') ? 'active' : '' }}" href="{{ route('kamar.index') }}">KAMAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pasien*') ? 'active' : '' }}" href="{{ route('pasien.index') }}">PASIEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('reservasi*') ? 'active' : '' }}" href="{{ route('reservasi.index') }}">RESERVASI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main role="main" class="container flex-grow-1">
        <div class="main-container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>
