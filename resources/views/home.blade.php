@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero text-center">
    <div class="container">
        <p class="hero-welcome mb-1">Welcome To</p>
        <h1 class="display-3 fw-bold mb-3">Toko <span class="accent">Alat Musik</span></h1>
        <p class="lead mb-4">Gitar, keyboard, drum, hingga alat tiup &mdash; lengkap dengan merek, jenis, dan harga terbaik.</p>
        <div class="hero-identity d-inline-block text-start">
            <div><strong>Nama</strong> : Nuzul Faddillah</div>
            <div><strong>NIM</strong> : 251011700332</div>
            <div><strong>Prodi</strong> : Sistem Informasi</div>
            <div><strong>Dosen</strong> : Afif Efendi</div>
        </div>
        <div class="mt-4">
            <a href="{{ route('instruments.index') }}" class="btn btn-warning btn-lg fw-semibold">Jelajahi Alat Musik</a>
        </div>
    </div>
</section>

<section class="container py-5">
    <h2 class="section-title mb-4">Produk Pilihan</h2>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
        @forelse ($instruments as $instrument)
            @include('partials.instrument-card', ['instrument' => $instrument])
        @empty
            <div class="col-12">
                <div class="alert alert-warning mb-0">Belum ada data alat musik. Jalankan <code>php artisan migrate --seed</code>.</div>
            </div>
        @endforelse
    </div>
</section>
@endsection
