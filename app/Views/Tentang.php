<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"/> <!-- Mengganti font ke Inter Medium -->

    <style>
        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background-color: #E2E2B6; /* Background warna luar */
        }
/* Navbar Customization */
.navbar-custom {
    background-color: #021526;
    padding: 0; /* Menghilangkan padding untuk mengurangi tinggi background */
    border-bottom: 1px solid transparent; /* Tambahkan batas bawah jika diperlukan */
}

/* Navbar Brand (Logo) */
.navbar-brand img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    width: 110px; /* Ukuran default gambar lebih kecil */
    margin-left: 30px; /* Geser logo ke kanan dengan menambah margin kiri */

}

/* Navbar Links */
.navbar-nav .nav-item {
    margin: 10px; /* Menghilangkan margin antar item navbar */
}

.navbar-nav .nav-link {
    font-family: 'Lato', sans-serif;
    font-size: 12px; /* Ukuran font dapat disesuaikan lebih kecil */
    font-weight: 700;
    color: #E2E2B6 !important;
    padding: 5px 8px; /* Mengurangi padding lebih lanjut untuk mengurangi tinggi */
    transition: color 0.3s ease, transform 0.3s ease;
    
}

.navbar-nav .nav-link:hover {
    color: #FFD700 !important; /* Warna kuning saat hover */
    transform: scale(1.1) !important; /* Efek perbesaran */
}

/* Responsivitas dengan Media Queries */
@media (max-width: 992px) { /* Untuk layar medium (tablet) */
    .navbar-brand img {
        width: 100px; /* Perkecil ukuran gambar pada layar tablet */
    }
    .navbar-nav .nav-link {
        font-size: 9px; /* Perkecil ukuran font */
    }
}

@media (max-width: 768px) { /* Untuk layar kecil (smartphone) */
    .navbar-brand img {
        width: 80px; /* Ukuran gambar lebih kecil */
    }
    .navbar-nav .nav-link {
        font-size: 8px; /* Sesuaikan ukuran font */
        padding: 4px;   /* Sesuaikan padding lebih kecil */
    }
}

@media (max-width: 576px) { /* Untuk layar extra kecil (smartphone kecil) */
    .navbar-brand img {
        width: 70px; /* Ukuran gambar lebih kecil untuk smartphone */
    }
    .navbar-nav .nav-link {
        font-size: 7px;  /* Lebih kecil untuk layar kecil */
        padding: 2px;    /* Sesuaikan padding lebih kecil */
    }
}



/* Carousel Styles */
/* CSS untuk carousel agar lebih responsif dan lebih kecil */
.carousel-item img {
    width: 100%; /* Memastikan lebar gambar mengikuti elemen carousel */
    height: 25vh; /* Mengatur tinggi gambar menjadi 25% dari viewport */
    object-fit: cover; /* Gambar tetap proporsional dan terpusat */
}

/* Overlay untuk menampilkan efek hitam transparan di atas gambar */
.carousel-overlay {
    position: absolute; 
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Overlay hitam dengan opasitas 0.5 */
    z-index: 1; /* Pastikan overlay berada di bawah teks */
}

/* Media Queries untuk ukuran layar besar (desktop) */
@media (min-width: 1440px) {
    .carousel-item img {
        height: 40vh; /* Lebih besar untuk layar sangat besar */
    }

    .carousel-caption h1 {
        font-size: 2.5rem; /* Ukuran font lebih besar */
    }

    .carousel-caption p {
        font-size: 1.5rem; /* Deskripsi lebih besar */
    }
}

/* Media Queries untuk layar laptop besar */
@media (min-width: 1024px) and (max-width: 1439px) {
    .carousel-item img {
        height: 30vh; /* Sedikit lebih besar di layar laptop besar */
    }

    .carousel-caption h1 {
        font-size: 2rem; /* Sesuaikan ukuran font */
    }

    .carousel-caption p {
        font-size: 1.2rem; /* Deskripsi lebih besar */
    }
}

/* Media Queries untuk perangkat tablet besar */
@media (min-width: 769px) and (max-width: 1023px) {
    .carousel-item img {
        height: 25vh; /* Tinggi medium untuk tablet besar */
    }

    .carousel-caption h1 {
        font-size: 1.8rem; /* Ukuran font medium */
    }

    .carousel-caption p {
        font-size: 1.1rem; /* Sesuaikan deskripsi */
    }
}

/* Media Queries untuk tablet */
@media (max-width: 768px) {
    .carousel-item img {
        height: 20vh; /* Lebih kecil lagi untuk tablet */
    }

    .carousel-caption h1 {
        font-size: 1.3rem; /* Sesuaikan ukuran teks di layar tablet */
    }

    .carousel-caption p {
        font-size: 1rem; /* Sesuaikan teks deskripsi */
    }

    .carousel-caption {
        padding: 10px; /* Tambah padding untuk memastikan elemen tidak terpotong */
    }
}

/* Media Queries untuk perangkat sangat kecil (mobile) */
@media (max-width: 480px) {
    .carousel-item img {
        height: 15vh; /* Lebih kecil untuk perangkat mobile */
    }

    .carousel-caption h1 {
        font-size: 1rem; /* Perkecil lagi untuk layar mobile */
    }

    .carousel-caption p {
        font-size: 0.8rem; /* Sesuaikan teks deskripsi di layar kecil */
    }

    .carousel-caption {
        padding: 5px; /* Tambahkan sedikit padding di layar kecil */
    }
}

/* Tambahan untuk layar sangat kecil (ponsel di bawah 400px) */
@media (max-width: 400px) {
    .carousel-item img {
        height: 12vh; /* Lebih kecil untuk perangkat ponsel sangat kecil */
    }

    .carousel-caption h1 {
        font-size: 0.9rem; /* Font lebih kecil */
    }

    .carousel-caption p {
        font-size: 0.7rem; /* Deskripsi lebih kecil */
    }

    .carousel-caption {
        padding: 3px; /* Padding yang lebih kecil lagi */
    }
}


        .page-title {
            position: absolute;
            left: 50%;
            top: 150px;
            transform: translateX(-50%);
            color: #E2E2B6;
            font-size: 48px;
            font-family: 'League Spartan', sans-serif;
            font-weight: 600;
            z-index: 2;
        }

        .breadcrumb {
            position: absolute;
            left: 50%;
            top: 220px;
            transform: translateX(-50%);
            font-size: 16px;
            font-family: 'League Spartan', sans-serif;
            font-weight: 400;
            z-index: 2;
        }

        .breadcrumb a {
            color: #FFD000;
            text-decoration: none;
        }

        .breadcrumb span {
            color: #E2E2B6;
        }  

/* Layout utama */
.content {
    display: flex;
    justify-content: center; /* Pusatkan konten secara horizontal */
    align-items: center; /* Pusatkan konten secara vertikal */
    padding: 10px 50px;
    width: 100%; /* Mengisi 100% lebar halaman */
    margin: 50px auto;
    overflow: hidden; /* Menghindari float yang berantakan */
}

/* Flex untuk gambar dan teks agar sejajar horizontal */
.content-flex {
    display: flex;
    align-items: center; /* Pusatkan konten vertikal di dalam flex */
    justify-content: center; /* Pusatkan konten horizontal */
    flex-wrap: wrap; /* Agar tetap responsif */
}

.content img {
    margin-right: 35px; /* Jarak antara gambar dan teks */
    border-radius: 25px;
    width: 600px; /* Atur lebar gambar */
    height: 640px; /* Atur tinggi gambar */
    object-fit: cover; /* Isi gambar sesuai proporsi */
}

/* Mengatur tulisan di samping gambar */
.content h2 {
    color: #6EACDA;
    font-size: 12px; /* Ukuran font judul */
    margin-top: 10px; 
    font-family: 'Inter', sans-serif;
}

.content p {
    flex: 1;
    text-align: left;
    line-height: 1.6;
    font-family: 'League Spartan', sans-serif;
    font-size: 20px;
    font-weight: 600;
    max-width: 600px; /* Batasi lebar maksimal paragraf */
}

/* Responsiveness */
@media (max-width: 1024px) {
    .content-flex {
        flex-direction: column; /* Ubah menjadi kolom untuk layar kecil */
        text-align: center;
    }

    .content img {
        margin: 0 auto 20px;
        width: 100%; /* Buat gambar memenuhi lebar container */
        height: auto; /* Otomatis sesuaikan tinggi */
    }

    .content h2, .content p {
        text-align: center;
        font-size: 18px;
    }
}

@media (max-width: 768px) {
    .content img {
        width: 100%; /* Gambar 100% lebar untuk tablet */
        height: auto;
    }

    .content h2 {
        font-size: 16px;
    }

    .content p {
        font-size: 16px;
    }
}

@media (max-width: 600px) {
    .content img {
        width: 80%; /* Kecilkan gambar lebih banyak untuk layar sangat kecil */
        height: auto;
        margin-bottom: 20px;
    }

    .content h2, .content p {
        font-size: 14px;
        text-align: center; /* Pusatkan teks untuk layar kecil */
    }
}

@media (max-width: 576px) {
    .content img {
        width: 100%;
        height: auto;
    }

    .content h2 {
        font-size: 14px;
    }

    .content p {
        font-size: 14px;
    }
}

/* Tambahan untuk perangkat dengan resolusi lebih kecil seperti Nest Hub */
@media (max-width: 1024px) and (orientation: landscape) {
    .content img {
        width: 70%; /* Kecilkan gambar untuk menyesuaikan layar */
        height: auto;
        margin-bottom: 15px; /* Jarak antara gambar dan teks */
    }

    .content h2, .content p {
        font-size: 14px; /* Ukuran font lebih kecil */
        text-align: center;
    }
}

/* Footer responsif */
.footer {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    background-color: #021526;
    color: white;
    font-size: 8px;
}

.footer-logo {
    max-width: 60px;
    margin-right: 5px;
}

.footer p {
    margin: 0;
    font-size: 8px;
    font-family: 'League Spartan', sans-serif;
    color: #E2E2B6;
}

.footer-separator {
    margin: 0 5px;
    color: #E2E2B6;
}




        .footer {
            display: flex;
            align-items: center; /* Untuk memastikan elemen sejajar vertikal */
            justify-content: center; /* Untuk membuat konten berada di tengah */
            padding: 5px; /* Kurangi padding untuk membuat footer lebih tipis */
            background-color: #021526;
            color: white;
            font-size: 8px; /* Ukuran font yang lebih kecil */
        }

        .footer-logo {
            max-width: 60px; /* Kecilkan ukuran logo */
            margin-right: 5px; /* Kurangi jarak antara logo dan teks */
        }

        .footer p {
            margin: 0;
            font-size: 8px; /* Ukuran font yang lebih kecil untuk teks copyright */
            font-family: 'League Spartan', sans-serif; /* Gaya font League Spartan Regular */
            color: #E2E2B6; /* Ubah warna tulisan Copyright */
        }

        .footer-separator {
            margin: 0 5px; /* Jarak antara logo dan teks copyright */
            color: #E2E2B6; /* Warna separator yang sama dengan warna teks */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="/upload/logo.png" alt="Logo" width="161" height="97" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">BERANDA</a></li>
                <li class="nav-item"><a class="nav-link" href="/tentang">TENTANG</a></li> <!-- Link ke halaman Tentang -->
                <li class="nav-item"><a class="nav-link" href="/produk">PRODUK</a></li>
                <li class="nav-item"><a class="nav-link" href="/artikel">ARTIKEL</a></li>
                <li class="nav-item"><a class="nav-link" href="/aktivitas">AKTIVITAS</a></li>
                <li class="nav-item"><a class="nav-link" href="/kontak">KONTAK</a></li> <!-- Link ke halaman Kontak -->

            </ul>
        </div>
    </div>
</nav>


    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/upload/TENTANG1.jpg" alt="Slide 1">
                <div class="carousel-overlay"></div>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <div class="page-title">Tentang Kami</div>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
    <a href="/">Beranda</a> <span> / Tentang</span>    </div>

    <div class="content">
        <div class="content-flex">
            <img src="/upload/beranda.jpg" alt="TechSmart Image" class="article-image">
            <div>
                <h2>TENTANG KAMI</h2>
                <p>
                    TechSmart Electronics adalah sebuah perusahaan yang bergerak di bidang penjualan alat elektronik dan teknologi, didirikan dengan misi untuk menyediakan produk-produk elektronik berkualitas tinggi dari merek-merek ternama. Kami melayani kebutuhan elektronik rumah tangga, pribadi, serta kebutuhan bisnis dengan menyediakan berbagai macam produk dari smartphone hingga perangkat rumah tangga pintar. Sejak didirikan, kami telah berkomitmen untuk memberikan layanan terbaik kepada pelanggan kami, dengan mengedepankan inovasi, kualitas, dan keunggulan dalam segala hal yang kami lakukan.
                </p>
                <p>
                TechSmart Electronics didirikan pada tahun 2012 oleh sekelompok profesional yang memiliki pengalaman bertahun-tahun di industri teknologi dan elektronik. Perusahaan ini lahir dari keinginan untuk menciptakan tempat di mana pelanggan dapat menemukan semua kebutuhan elektronik mereka dengan mudah dan dengan jaminan kualitas terbaik. Dalam satu dekade, TechSmart Electronics telah berkembang pesat dan memiliki beberapa cabang di berbagai kota besar di Indonesia, serta platform e-commerce yang memudahkan pelanggan dari seluruh negeri untuk berbelanja.
                </p>

            </div>
        </div>
    </div>

    <div class="footer">
    <img src="upload/logo.png" alt="Logo" class="footer-logo">
    <span class="footer-separator">|</span>
    <p>Copyright ©2024. Design by Bayu Valent</p>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
