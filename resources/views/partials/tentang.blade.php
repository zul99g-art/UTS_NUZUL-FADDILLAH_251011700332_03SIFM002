<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | Toko Alat Musik</title>

    {{-- Bootstrap dari folder lokal public/Bootstrap --}}
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        #tentang, #kontak { scroll-margin-top: 56px; }

        /* ===== TENTANG: gelap + gradasi ===== */
        .section-tentang {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            color: #fff;
        }
        .section-tentang .badge-label {
            background: rgba(255, 255, 255, .15);
            letter-spacing: 1px;
        }
        .stat-box {
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 1rem;
            padding: 1.5rem 1rem;
            text-align: center;
        }
        .stat-box .angka { font-size: 2.2rem; font-weight: 800; color: #fbbf24; }

        /* ===== KONTAK: terang + split ===== */
        .section-kontak { background: #f8fafc; }
        .kontak-item { display: flex; align-items: center; gap: 1rem; margin-bottom: 1.25rem; }
        .kontak-ikon {
            width: 48px; height: 48px; flex-shrink: 0;
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%;
            background: #0d6efd; color: #fff; font-size: 1.3rem;
        }
        .form-kontak {
            background: #fff;
            border-top: 5px solid #0d6efd;
            border-radius: .75rem;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">🎸 Toko Alat Musik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold' : '' }}"
                       href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('instruments.*') ? 'active fw-semibold' : '' }}"
                       href="{{ route('instruments.index') }}">Daftar Alat Musik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    @yield('content')
</main>

{{-- ====== TENTANG (gelap, gradasi, statistik) ====== --}}
<section id="tentang" class="section-tentang py-5 mt-5">
    <div class="container py-3">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge badge-label text-uppercase mb-3 px-3 py-2">Tentang Kami</span>
                <h2 class="display-6 fw-bold mb-3">Temukan Alat Musik<br>Impianmu di Sini</h2>
                <p class="opacity-75">
                    <strong>Toko Alat Musik</strong> adalah website katalog yang menampilkan berbagai alat musik
                    dari merek ternama seperti Yamaha, Fender, dan Kala. Pengunjung bisa menelusuri koleksi
                    berdasarkan jenis, melihat harga, dan membuka detail setiap produk.
                </p>
                <p class="opacity-75 mb-0">
                    Website ini dibuat sebagai tugas UTS Rekayasa Web menggunakan Laravel dan Bootstrap,
                    untuk mempermudah orang memilih alat musik sesuai kebutuhan dan anggaran.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="angka">5</div>
                            <div class="small">Kategori</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="angka">3+</div>
                            <div class="small">Merek Ternama</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="angka">100%</div>
                            <div class="small">Produk Asli</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="angka">24/7</div>
                            <div class="small">Katalog Online</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ====== KONTAK (terang, info kiri + formulir kanan) ====== --}}
<section id="kontak" class="section-kontak py-5">
    <div class="container py-3">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Hubungi Kami</h2>
            <p class="text-muted mb-0">Ada pertanyaan soal produk? Kirim pesan atau hubungi kami langsung.</p>
        </div>

        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <div class="kontak-item">
                    <div class="kontak-ikon">📧</div>
                    <div>
                        <div class="fw-semibold">Email</div>
                        <div class="text-muted">info@tokoalatmusik.test</div>
                    </div>
                </div>
                <div class="kontak-item">
                    <div class="kontak-ikon">📞</div>
                    <div>
                        <div class="fw-semibold">Telepon / WhatsApp</div>
                        <div class="text-muted">0812-3456-7890</div>
                    </div>
                </div>
                <div class="kontak-item">
                    <div class="kontak-ikon">📍</div>
                    <div>
                        <div class="fw-semibold">Alamat</div>
                        <div class="text-muted">Universitas Pamulang, Tangerang Selatan, Banten</div>
                    </div>
                </div>
                <div class="kontak-item">
                    <div class="kontak-ikon">🕘</div>
                    <div>
                        <div class="fw-semibold">Jam Layanan</div>
                        <div class="text-muted">Senin &ndash; Sabtu, 09.00 &ndash; 17.00 WIB</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <form class="form-kontak shadow p-4" id="formKontak">
                    <h5 class="fw-bold mb-3">Kirim Pesan</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small">Nama</label>
                            <input type="text" class="form-control" id="kNama" placeholder="Nama kamu" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small">Email</label>
                            <input type="email" class="form-control" id="kEmail" placeholder="email@contoh.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label small">Pesan</label>
                            <textarea class="form-control" id="kPesan" rows="4" placeholder="Tulis pesanmu di sini..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer py-4">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-8">
                <p class="mb-0 small">&copy; {{ date('Y') }} Toko Alat Musik &mdash; UTS Rekayasa Web, Program Studi Sistem Informasi, Universitas Pamulang.</p>
                <p class="mb-0 small">Yohanes &middot; NIM 2510011700332 &middot; Dosen Pengampu: Afif Efendi</p>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="{{ route('home') }}">Beranda</a> &middot;
                <a href="{{ route('instruments.index') }}">Daftar Alat Musik</a> &middot;
                <a href="#tentang">Tentang</a> &middot;
                <a href="#kontak">Kontak</a>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    // Formulir kontak: membuka aplikasi email dengan pesan yang sudah terisi
    document.getElementById('formKontak').addEventListener('submit', function (e) {
        e.preventDefault();
        var nama  = document.getElementById('kNama').value;
        var email = document.getElementById('kEmail').value;
        var pesan = document.getElementById('kPesan').value;
        var isi   = 'Nama: ' + nama + '\nEmail: ' + email + '\n\n' + pesan;
        window.location.href = 'mailto:info@tokoalatmusik.test?subject='
            + encodeURIComponent('Pesan dari ' + nama)
            + '&body=' + encodeURIComponent(isi);
    });
</script>
</body>
</html>