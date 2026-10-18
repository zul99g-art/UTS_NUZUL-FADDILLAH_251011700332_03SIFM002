@extends('layouts.app')

@section('title', $instrument->name)

@section('content')
<section class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('instruments.index') }}">Daftar Alat Musik</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $instrument->name }}</li>
        </ol>
    </nav>

    <div class="card shadow-sm border-0">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ $instrument->image_url }}" class="img-fluid rounded-start w-100 h-100 detail-img" alt="{{ $instrument->name }}">
            </div>
            <div class="col-md-7">
                <div class="card-body p-4 p-lg-5">
                    <span class="badge text-bg-warning mb-2">{{ $instrument->type }}</span>
                    <h1 class="fw-bold mb-1">{{ $instrument->name }}</h1>
                    <p class="text-muted mb-3">oleh {{ $instrument->brand }}</p>
                    <h3 class="text-danger fw-bold mb-4">{{ $instrument->price_rupiah }}</h3>

                    <table class="table table-borderless w-auto mb-3">
                        <tr><th class="pe-4">Merek</th><td>{{ $instrument->brand }}</td></tr>
                        <tr><th class="pe-4">Jenis</th><td>{{ $instrument->type }}</td></tr>
                        <tr><th class="pe-4">Harga</th><td>{{ $instrument->price_rupiah }}</td></tr>
                    </table>

                    <h5 class="fw-bold">Deskripsi</h5>
                    <p class="text-secondary">{{ $instrument->description }}</p>

                    <a href="{{ route('instruments.index') }}" class="btn btn-secondary">&laquo; Kembali ke Daftar</a>
                </div>
            </div>
        </div>
    </div>

    @if ($others->isNotEmpty())
        <h3 class="section-title mt-5 mb-4">Produk Lainnya</h3>
        <div class="row row-cols-2 row-cols-md-4 g-4">
            @foreach ($others as $other)
                @include('partials.instrument-card', ['instrument' => $other])
            @endforeach
        </div>
    @endif
</section>
@endsection
