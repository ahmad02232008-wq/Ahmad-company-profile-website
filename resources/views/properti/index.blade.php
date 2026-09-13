<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - PT Horizon Properti Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-navy { background-color: #0d1b2a; }
        .text-navy { color: #0d1b2a; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Header / Navbar Admin -->
    <header class="bg-navy text-white px-8 py-4 flex justify-between items-center shadow-md">
        <h1 class="text-xl font-bold tracking-wider">ADMIN PANEL - PT HORIZON PROPERTI</h1>
        <a href="/" target="_blank" class="text-xs bg-blue-700 hover:bg-blue-600 px-3 py-2 rounded font-medium transition">
            View Main Website &rarr;
        </a>
    </header>

    <!-- Main Container -->
    <main class="container mx-auto px-6 py-10">

        <!-- Alert Notifikasi Berhasil -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-700 rounded-lg text-sm font-medium">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-extrabold text-navy">Property Management</h2>
            
            <!-- Add property button -->
            <a href="/admin/properti/tambah" class="bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2 rounded-lg transition shadow inline-block">
                + Add New Property
            </a>
        </div>

        <!-- Tabel Data Properti -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-xs font-bold text-gray-600 uppercase">
                        <th class="py-4 px-6">No</th>
                        <th class="py-4 px-6">Property Name</th>
                        <th class="py-4 px-6">Type</th>
                        <th class="py-4 px-6">Location</th>
                        <th class="py-4 px-6">Price</th>
                        <th class="py-4 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    @forelse($propertis as $index => $item)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-4 px-6 font-medium text-gray-500">{{ $index + 1 }}</td>
                            <td class="py-4 px-6 font-bold text-navy">{{ $item->nama_properti }}</td>
                            <td class="py-4 px-6">
                                <span class="px-2 py-1 bg-blue-100 text-navy text-xs rounded-full font-semibold">
                                    {{ $item->jenis }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-gray-600">{{ $item->lokasi }}</td>
                            <td class="py-4 px-6 font-semibold text-green-700">
                                Rp {{ number_format($item->harga, 0, ',', '.') }}
                            </td>
                            <td class="py-4 px-6 text-center space-x-2 flex justify-center items-center">
                                <!-- Tombol Edit -->
                                <a href="/admin/properti/{{ $item->id }}/edit" class="bg-amber-500 hover:bg-amber-600 text-white text-xs px-3 py-1.5 rounded transition inline-block">
                                    Edit
                                </a>

                                <!-- Delete property form -->
                                <form action="/admin/properti/{{ $item->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this property?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-xs px-3 py-1.5 rounded transition">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-8 text-gray-500">
                                No properties found. Please add a new property.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>