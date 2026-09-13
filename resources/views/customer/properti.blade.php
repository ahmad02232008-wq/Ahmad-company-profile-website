<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties - PT Horizon Properti Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-navy { background-color: #0d1b2a; }
        .text-navy { color: #0d1b2a; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <style>
        .property-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            border-radius: 0.75rem 0.75rem 0 0;
            background: #e5e7eb;
        }
    </style>

    <!-- Navbar -->
    <nav class="bg-navy text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="/images/logo.png" alt="PT Horizon Properti Indonesia logo" class="w-10 h-10 object-cover rounded-full border border-white/30">
                <span class="text-xl font-bold tracking-wider">PT HORIZON PROPERTI INDONESIA</span>
            </div>
            <div class="flex space-x-6 text-sm font-medium">
                <a href="/" class="hover:text-blue-300 transition">Home</a>
                <a href="/properti" class="text-blue-300 font-semibold">Properties</a>
            </div>
        </div>
    </nav>

    <!-- Property listing content -->
    <div class="container mx-auto px-6 py-12">
        <h1 class="text-3xl font-extrabold text-navy mb-2 text-center">Our Featured Properties</h1>
        <p class="text-center text-gray-600 mb-10">Find your ideal home with PT Horizon Properti Indonesia.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($propertis as $item)
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition">
                    @php
                        $imageValue = $item->gambar ?? 'grand-horizon.jpg';
                        $imageUrl = $imageValue;

                        if (!preg_match('#^https?://#', $imageValue)) {
                            $imageValue = ltrim($imageValue, '/');
                            if (!str_starts_with($imageValue, 'images/') && !str_starts_with($imageValue, 'storage/')) {
                                $imageValue = 'images/' . $imageValue;
                            }
                            $imageUrl = asset($imageValue);

                            $imageFile = public_path($imageValue);
                            if (file_exists($imageFile)) {
                                $imageUrl .= '?v=' . filemtime($imageFile);
                            }
                        }
                    @endphp

                    <img src="{{ $imageUrl }}" alt="{{ $item->nama_properti }}" class="property-image">

                    <div class="p-6">
                        <span class="text-xs font-semibold px-3 py-1 bg-blue-100 text-navy rounded-full">{{ $item->jenis }}</span>
                        <h3 class="text-xl font-bold text-navy mt-3 mb-2">{{ $item->nama_properti }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ $item->lokasi }}</p>
                        <div class="text-lg font-bold text-blue-900 mb-4">
                            Rp {{ number_format($item->harga, 0, ',', '.') }}
                        </div>
                        <div class="flex justify-between text-xs text-gray-500 border-t pt-3 mb-4">
                            <span>Land Area: {{ $item->luas_tanah ?? '-' }} m²</span>
                            <!-- Diperbaiki: Menggunakan kamar_tidur -->
                            <span>Bedrooms: {{ $item->kamar_tidur ?? '-' }}</span>
                        </div>
                        <!-- Diperbaiki: Menggunakan $item->id -->
                        <a href="/properti/{{ $item->id }}" class="block text-center bg-navy text-white py-2 rounded-lg text-sm font-medium hover:bg-blue-900 transition">
                            View Details
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 bg-white rounded-xl shadow-sm">
                    <p class="text-gray-500">No properties are currently available.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-navy text-white py-6 text-center text-sm mt-12">
        <p>&copy; 2026 PT Horizon Properti Indonesia. All Rights Reserved.</p>
    </footer>

</body>
</html>