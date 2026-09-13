<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Property - PT Horizon Properti Indonesia</title>
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
        <a href="/admin/properti" class="text-xs bg-gray-700 hover:bg-gray-600 px-3 py-2 rounded font-medium transition">
            &larr; Back to Dashboard
        </a>
    </header>

    <!-- Main Container -->
    <main class="container mx-auto px-6 py-10 max-w-2xl">
        <div class="bg-white rounded-xl shadow-md p-8 border border-gray-200">
            <h2 class="text-2xl font-extrabold text-navy mb-6">Add New Property</h2>

            <form action="/admin/properti" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-semibold text-navy mb-2">Property Name</label>
                    <input type="text" name="nama_properti" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-navy" placeholder="Example: Grand Horizon Residence" required>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-semibold text-navy mb-2">Property Type</label>
                        <select name="jenis" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-navy" required>
                            <option value="Rumah">House</option>
                            <option value="Ruko">Shop House</option>
                            <option value="Apartemen">Apartment</option>
                            <option value="Tanah">Land</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-navy mb-2">Price (IDR)</label>
                        <input type="number" name="harga" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-navy" placeholder="500000000" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold text-navy mb-2">Location</label>
                    <input type="text" name="lokasi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-navy" placeholder="Example: Bandung, West Java" required>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold text-navy mb-2">Description</label>
                    <textarea name="deskripsi" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-navy" placeholder="Describe the property's specifications and facilities..."></textarea>
                </div>

                <button type="submit" class="w-full bg-navy text-white py-3 rounded-lg font-medium hover:bg-blue-900 transition">
                    Save Property
                </button>
            </form>
        </div>
    </main>

</body>
</html>