<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Horizon Properti Indonesia</title>
    <!-- Tailwind CSS provides the page styling. -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-navy { background-color: #0d1b2a; }
        .text-navy { color: #0d1b2a; }
        .border-navy { border-color: #0d1b2a; }
    </style>
</head>
<body class="bg-white text-gray-800 font-sans">

    <!-- Navbar / Header -->
    <nav class="bg-navy text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="/images/logo.png" alt="PT Horizon Properti Indonesia logo" class="w-10 h-10 object-cover rounded-full border border-white/30 mr-3">
                <span class="text-xl font-bold tracking-wider">PT HORIZON PROPERTI INDONESIA</span>
            </div>
            <div class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="/" class="hover:text-blue-300 transition">Home</a>
                <a href="/properti" class="hover:text-blue-300 transition">Properties</a>
                <a href="/profil" class="hover:text-blue-300 transition">About Us</a>
                <a href="/kontak" class="hover:text-blue-300 transition">Contact & Consultation</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Nuansa Biru Mewah ala Gedung PT Horizon) -->
    <header class="bg-navy text-white py-20 px-6 text-center relative overflow-hidden">
        <div class="container mx-auto max-w-4xl relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-wide">PT HORIZON PROPERTI INDONESIA</h1>
            <p class="text-lg md:text-xl text-blue-200 italic mb-8">"YOUR DREAM HOME, OUR COMMITMENT."</p>
            <a href="/properti" class="bg-white text-navy font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-blue-100 transition duration-300">
                Explore Our Properties
            </a>
        </div>
    </header>

    <!-- Core services -->
    <section class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-navy mb-12">Our Core Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow border-t-4 border-navy">
                    <h3 class="font-bold text-xl mb-2 text-navy">Property Sales & Purchases</h3>
                    <p class="text-gray-600 text-sm">We help you buy and sell homes or land securely and transparently.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow border-t-4 border-navy">
                    <h3 class="font-bold text-xl mb-2 text-navy">Investment Consulting</h3>
                    <p class="text-gray-600 text-sm">Professional guidance to maximize the potential of your property investment.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow border-t-4 border-navy">
                    <h3 class="font-bold text-xl mb-2 text-navy">Mortgage & Site Surveys</h3>
                    <p class="text-gray-600 text-sm">Support with mortgage applications and convenient on-site survey scheduling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-navy text-white py-8 text-center text-sm">
        <p>&copy; 2026 PT Horizon Properti Indonesia. All Rights Reserved.</p>
    </footer>

</body>
</html>