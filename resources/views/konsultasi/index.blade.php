<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Requests - PT Horizon Properti Indonesia</title>
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
        <div class="space-x-4 text-xs font-semibold">
            <a href="/admin/properti" class="hover:text-blue-300 transition">Manage Properties</a>
            <a href="/admin/konsultasi" class="text-blue-300 underline">Consultation Requests</a>
            <a href="/" target="_blank" class="bg-blue-700 hover:bg-blue-600 px-3 py-2 rounded transition ml-2">
                Website Utama &rarr;
            </a>
        </div>
    </header>

    <!-- Main Container -->
    <main class="container mx-auto px-6 py-10">
        <h2 class="text-2xl font-extrabold text-navy mb-6">Consultation Requests / Incoming Messages</h2>

        <!-- Customer and consultation data -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-xs font-bold text-gray-600 uppercase">
                        <th class="py-4 px-6">No</th>
                        <th class="py-4 px-6">Customer Name</th>
                        <th class="py-4 px-6">No. WhatsApp / HP</th>
                        <th class="py-4 px-6">Email</th>
                        <th class="py-4 px-6 text-center">Contact Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    @forelse($pelanggans as $index => $item)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-4 px-6 font-medium text-gray-500">{{ $index + 1 }}</td>
                            <td class="py-4 px-6 font-bold text-navy">{{ $item->nama }}</td>
                            <td class="py-4 px-6 text-gray-700 font-medium">{{ $item->no_hp }}</td>
                            <td class="py-4 px-6 text-gray-500">{{ $item->email }}</td>
                            <td class="py-4 px-6 text-center">
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $item->no_hp) }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white text-xs px-3 py-1.5 rounded transition font-medium inline-block">
                                    Contact via WhatsApp &rarr;
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-8 text-gray-500">
                                No consultation messages have been received.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>