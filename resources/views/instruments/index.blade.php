@extends('layouts.app')

@section('title', 'Daftar Alat Musik')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 class="fw-bold mb-1">Daftar Alat Musik</h1>
        <p class="text-muted mb-0">Temukan alat musik favoritmu berdasarkan jenis.</p>
    </div>
</section>

<section class="container py-4">
    <div class="d-flex flex-wrap gap-2 mb-4">
        <a href="{{ route('instruments.index') }}"
           class="btn btn-sm {{ $type ? 'btn-outline-primary' : 'btn-primary' }}">Semua</a>
        @foreach ($types as $t)
            <a href="{{ route('instruments.index', ['type' => $t]) }}"
               class="btn btn-sm {{ $type === $t ? 'btn-primary' : 'btn-outline-primary' }}">{{ $t }}</a>
        @endforeach
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
        @forelse ($instruments as $instrument)
            @include('partials.instrument-card', ['instrument' => $instrument])
        @empty
            <div class="col-12">
                <div class="alert alert-warning mb-0">Alat musik tidak ditemukan.</div>
            </div>
        @endforelse
    </div>
</section>
@endsection
