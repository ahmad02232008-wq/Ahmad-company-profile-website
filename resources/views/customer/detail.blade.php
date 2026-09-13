<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details - {{ $properti->nama_properti }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; color: #333; }
        .hero-img { width: 100%; max-height: 420px; object-fit: contain; background: #f1f5f9; border-radius: 12px; }
        .badge-jenis { background-color: #e0f2fe; color: #0369a1; font-weight: 600; }
        .spec-card { background: #ffffff; border-radius: 10px; padding: 15px; text-align: center; border: 1px solid #e5e7eb; }
    </style>
</head>
<body>

<div class="container py-5">
    <a href="/properti" class="btn btn-outline-secondary mb-4">&larr; Back to Properties</a>

    @php
        $imagePath = $properti->gambar ?? 'grand-horizon.jpg';
        $imageUrl = $imagePath;

        if (!preg_match('#^https?://#', $imagePath)) {
            $imagePath = ltrim($imagePath, '/');

            if (!str_starts_with($imagePath, 'images/') && !str_starts_with($imagePath, 'storage/')) {
                $imagePath = 'images/' . $imagePath;
            }

            $imageUrl = asset($imagePath);

            $imageFile = public_path($imagePath);
            if (file_exists($imageFile)) {
                $imageUrl .= '?v=' . filemtime($imageFile);
            }
        }
    @endphp

    <div class="row g-4">
        <!-- Main image -->
        <div class="col-lg-7">
            <img src="{{ $imageUrl }}" class="hero-img shadow" alt="{{ $properti->nama_properti }}">
        </div>

        <!-- Summary and price -->
        <div class="col-lg-5">
            <span class="badge badge-jenis px-3 py-2 rounded-pill mb-2">{{ $properti->jenis }}</span>
            <h2 class="fw-bold mb-1">{{ $properti->nama_properti }}</h2>
            <p class="text-muted mb-3">📍 {{ $properti->lokasi }}</p>

            <h3 class="text-primary fw-bold mb-4">Rp {{ number_format($properti->harga, 0, ',', '.') }}</h3>

            <div class="row g-2 mb-4">
                <div class="col-6">
                    <div class="spec-card">
                        <small class="text-muted d-block">Land Area</small>
                        <strong>{{ $properti->luas_tanah ?? '90' }} m²</strong>
                    </div>
                </div>
                <div class="col-6">
                    <div class="spec-card">
                        <small class="text-muted d-block">Building Area</small>
                        <strong>{{ $properti->luas_bangunan ?? '72' }} m²</strong>
                    </div>
                </div>
                <div class="col-6">
                    <div class="spec-card">
                        <small class="text-muted d-block">Bedrooms</small>
                        <strong>{{ $properti->kamar_tidur ?? '3' }} Rooms</strong>
                    </div>
                </div>
                <div class="col-6">
                    <div class="spec-card">
                        <small class="text-muted d-block">Bathrooms</small>
                        <strong>{{ $properti->kamar_mandi ?? '2' }} Rooms</strong>
                    </div>
                </div>
            </div>

            <a href="/kontak" class="btn btn-primary btn-lg w-100 fw-semibold shadow-sm">Contact Agent / Consult</a>
        </div>
    </div>

    <!-- Description -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm p-4 rounded-3">
                <h4 class="fw-bold mb-3">Property Description</h4>
                <p class="lh-lg text-secondary">
                    {{ $properti->deskripsi ?? 'A two-story modern minimalist home in a growing area of West Bandung. Designed with a contemporary natural-stone facade, elegant wood accents, and excellent natural lighting. The pleasant, flood-free environment includes a front garden and carport.' }}
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>