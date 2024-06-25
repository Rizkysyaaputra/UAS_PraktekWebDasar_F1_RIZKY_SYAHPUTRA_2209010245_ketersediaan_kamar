<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kamar Rumah Sakit - Beranda</title>
    
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #3368a5;
            --secondary-blue: #6bb9f0;
            --light-blue: #c4e0f9;
            --white: #ffffff;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--white);
            color: var(--primary-blue);
            line-height: 1.6;
            padding-top: 90px;
        }
        
        .navbar {
            background-color: var(--primary-blue);
            box-shadow: 0 2px 15px rgba(0,0,0,.1);
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
            box-shadow: 0 4px 6px rgba(0,0,0,.05);
            padding: 2rem;
            margin-top: 2rem;
            text-align: center;
        }
        
        .footer {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">RUMAH SAKIT RIZKY<a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('tipe_kamar*') ? 'active' : '' }}" href="{{ route('tipe_kamar.index') }}">Tipe Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kamar*') ? 'active' : '' }}" href="{{ route('kamar.index') }}">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pasien*') ? 'active' : '' }}" href="{{ route('pasien.index') }}">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('reservasi*') ? 'active' : '' }}" href="{{ route('reservasi.index') }}">Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main role="main" class="container flex-grow-1">
        <div class="main-container">
            <h1 class="display-4">Selamat Datang di Rumah Sakit Rizky</h1>
            <p class="lead">Kami siap melayani Anda dengan fasilitas terbaik dan pelayanan profesional.</p>
            <p>Untuk informasi lebih lanjut tentang tipe kamar, kamar yang tersedia, data pasien, dan reservasi, silakan gunakan navigasi di atas.</p>
        </div>
    </main>



    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
