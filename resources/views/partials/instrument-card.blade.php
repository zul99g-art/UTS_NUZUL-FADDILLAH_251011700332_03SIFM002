<div class="col">
    <div class="card instrument-card h-100 shadow-sm">
        <img src="{{ $instrument->image_url }}" class="card-img-top" alt="{{ $instrument->name }}">
        <div class="card-body d-flex flex-column">
            <span class="badge text-bg-warning align-self-start mb-2">{{ $instrument->type }}</span>
            <h6 class="card-title fw-bold mb-1">{{ $instrument->name }}</h6>
            <p class="card-text small text-muted mb-1">{{ $instrument->brand }}</p>
            <p class="card-text fw-bold text-danger mb-3">{{ $instrument->price_rupiah }}</p>
            <a href="{{ route('instruments.show', $instrument) }}" class="btn btn-primary btn-sm mt-auto">Lihat Detail</a>
        </div>
    </div>
</div>
