<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Consultation - PT Horizon Properti Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-navy { background-color: #0d1b2a; }
        .text-navy { color: #0d1b2a; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Navbar -->
    <nav class="bg-navy text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="/images/logo.png" alt="PT Horizon Properti Indonesia logo" class="w-10 h-10 object-cover rounded-full border border-white/30">
                <span class="text-xl font-bold tracking-wider">PT HORIZON PROPERTI INDONESIA</span>
            </div>
            <div class="flex space-x-6 text-sm font-medium">
                <a href="/" class="hover:text-blue-300 transition">Home</a>
                <a href="/properti" class="hover:text-blue-300 transition">Properties</a>
                <a href="/kontak" class="text-blue-300 font-semibold">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Contact Content -->
    <div class="container mx-auto px-6 py-12 max-w-2xl">
        <h1 class="text-3xl font-extrabold text-navy mb-2 text-center">Consultation & Contact Information</h1>
        <p class="text-center text-gray-600 mb-8">Contact our team or send us a message to schedule a site survey.</p>

        <div class="bg-white rounded-xl shadow-md p-8 border border-gray-100">
            
            <!-- Success notification -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg text-sm font-medium text-center">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/kontak" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-navy mb-2">Full Name</label>
                    <input type="text" name="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-navy" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-navy mb-2">WhatsApp / Phone Number</label>
                    <input type="text" name="no_hp" maxlength="14" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-navy" required>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-navy mb-2">Message / Consultation Request</label>
                    <textarea name="pesan" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-navy" required></textarea>
                </div>
                <button type="submit" class="w-full bg-navy text-white py-3 rounded-lg font-medium hover:bg-blue-900 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-navy text-white py-6 text-center text-sm mt-12">
        <p>&copy; 2026 PT Horizon Properti Indonesia. All Rights Reserved.</p>
    </footer>

</body>
</html>