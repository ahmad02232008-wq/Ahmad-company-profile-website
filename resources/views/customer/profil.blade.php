<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile | PT Horizon Properti Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-navy { background-color: #0d1b2a; }
        .bg-navy-soft { background: linear-gradient(135deg, #0d1b2a 0%, #122c43 100%); }
        .text-navy { color: #0d1b2a; }
        .border-navy { border-color: #0d1b2a; }
        .bg-soft { background-color: #f5f7fb; }
        .shadow-premium { box-shadow: 0 25px 60px rgba(15, 23, 42, 0.12); }
        .glass { background: rgba(255,255,255,0.08); backdrop-filter: blur(8px); }
    </style>
</head>
<body class="bg-white text-gray-800 font-sans antialiased">

    <nav class="bg-navy text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="/images/logo.png" alt="PT Horizon Properti Indonesia logo" class="w-10 h-10 object-cover rounded-full border border-white/30">
                <span class="text-lg font-bold tracking-wider">PT HORIZON PROPERTI</span>
            </div>
            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="/" class="hover:text-blue-300 transition">Home</a>
                <a href="/properti" class="hover:text-blue-300 transition">Properties</a>
                <a href="/profil" class="text-blue-300 transition">Company Profile</a>
                <a href="/kontak" class="hover:text-blue-300 transition">Contact & Consultation</a>
            </div>
        </div>
    </nav>

    <header class="bg-navy-soft text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(255,255,255,.08) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.08) 1px, transparent 1px); background-size: 32px 32px;"></div>
        <div class="container mx-auto px-6 py-24 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-sm uppercase tracking-[0.35em] text-blue-200 mb-4">About Us</p>
                    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Creating premium homes with lasting value.</h1>
                    <p class="text-lg text-blue-100 leading-8 max-w-xl">
                        PT Horizon Properti Indonesia is a fictional company focused on modern, strategic property development designed for quality living and long-term investment potential.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="/properti" class="bg-white text-navy px-7 py-3 rounded-full font-semibold shadow-lg hover:bg-blue-100 transition">Explore Projects</a>
                        <a href="/kontak" class="border border-white/30 text-white px-7 py-3 rounded-full font-semibold hover:bg-white/10 transition">Contact Us</a>
                    </div>
                </div>

                <div class="relative">
                    <div class="glass rounded-3xl p-6 shadow-premium border border-white/20">
                        <div class="bg-white/10 rounded-2xl p-6">
                            <div class="flex items-center justify-between mb-8">
                                <div>
                                    <p class="text-sm text-blue-100 uppercase tracking-[0.2em]">Brand Value</p>
                                    <h2 class="text-2xl font-bold mt-2">Horizon Living</h2>
                                </div>
                                <div class="text-4xl">🏙️</div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white/10 rounded-2xl p-4">
                                    <div class="text-3xl font-bold">2015</div>
                                    <div class="text-sm text-blue-100 mt-1">Founded</div>
                                </div>
                                <div class="bg-white/10 rounded-2xl p-4">
                                    <div class="text-3xl font-bold">12+</div>
                                    <div class="text-sm text-blue-100 mt-1">Projects</div>
                                </div>
                                <div class="bg-white/10 rounded-2xl p-4">
                                    <div class="text-3xl font-bold">3.4K</div>
                                    <div class="text-sm text-blue-100 mt-1">Clients</div>
                                </div>
                                <div class="bg-white/10 rounded-2xl p-4">
                                    <div class="text-3xl font-bold">98%</div>
                                    <div class="text-sm text-blue-100 mt-1">Trust</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="bg-soft">
        <section class="container mx-auto px-6 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600 mb-3">Company Profile</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-navy mb-6">Building more meaningful living spaces</h2>
                    <p class="text-gray-700 leading-8 mb-5">
                        Horizon Properti bridges the need for homes, investments, and commercial spaces that are not only aesthetically beautiful, but also strong in value and strategy. We focus on growing areas, convenient access, and designs that respond to modern lifestyles.
                    </p>
                    <p class="text-gray-700 leading-8">
                        Through a considered approach, our team ensures every project delivers a secure, comfortable ownership experience with strong potential for future growth.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-3xl shadow-premium p-6 border border-gray-100">
                        <div class="text-4xl mb-4">🎯</div>
                        <h3 class="text-xl font-bold text-navy mb-2">Visi</h3>
                        <p class="text-gray-600 leading-7">To become the preferred property developer advancing cities through high-quality, competitive homes.</p>
                    </div>
                    <div class="bg-white rounded-3xl shadow-premium p-6 border border-gray-100">
                        <div class="text-4xl mb-4">🤝</div>
                        <h3 class="text-xl font-bold text-navy mb-2">Misi</h3>
                        <p class="text-gray-600 leading-7">To provide integrated, transparent, and trusted property solutions for families, investors, and communities.</p>
                    </div>
                    <div class="bg-white rounded-3xl shadow-premium p-6 border border-gray-100 md:col-span-2">
                        <div class="text-4xl mb-4">🏆</div>
                        <h3 class="text-xl font-bold text-navy mb-2">Our Values</h3>
                        <p class="text-gray-600 leading-7">Integrity, innovation, transaction certainty, and responsive customer service guide every step we take.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 py-20">
            <div class="text-center mb-14">
                <p class="text-sm uppercase tracking-[0.2em] text-blue-600 font-semibold">History</p>
                <h2 class="text-3xl md:text-4xl font-bold text-navy">Company History</h2>
            </div>

            <div class="relative max-w-5xl mx-auto">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-400 to-sky-300"></div>

                <div class="space-y-10">
                    <div class="flex justify-start">
                        <div class="w-full md:w-1/2 md:pr-8 text-left md:text-right">
                            <div class="bg-white rounded-2xl shadow-premium p-6 border-l-4 border-blue-500">
                                <span class="inline-block text-xs uppercase tracking-[0.2em] text-blue-600 font-semibold mb-2">2015</span>
                                <h3 class="text-xl font-bold text-navy mb-2">The Beginning</h3>
                                <p class="text-gray-600 leading-7">PT Horizon Properti Indonesia was founded as a local property company focused on developing landed homes in growing urban areas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="w-full md:w-1/2 md:pl-8 text-left">
                            <div class="bg-white rounded-2xl shadow-premium p-6 border-l-4 border-sky-500">
                                <span class="inline-block text-xs uppercase tracking-[0.2em] text-sky-600 font-semibold mb-2">2018</span>
                                <h3 class="text-xl font-bold text-navy mb-2">Area Expansion</h3>
                                <p class="text-gray-600 leading-7">The company expanded its portfolio into upper-mid-market residential areas and strategic commercial projects to serve investment needs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <div class="w-full md:w-1/2 md:pr-8 text-left md:text-right">
                            <div class="bg-white rounded-2xl shadow-premium p-6 border-l-4 border-blue-500">
                                <span class="inline-block text-xs uppercase tracking-[0.2em] text-blue-600 font-semibold mb-2">2021</span>
                                <h3 class="text-xl font-bold text-navy mb-2">Modern Living Innovation</h3>
                                <p class="text-gray-600 leading-7">Horizon Properti introduced smart living and eco-friendly concepts designed for today’s families and the environment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="w-full md:w-1/2 md:pl-8 text-left">
                            <div class="bg-white rounded-2xl shadow-premium p-6 border-l-4 border-sky-500">
                                <span class="inline-block text-xs uppercase tracking-[0.2em] text-sky-600 font-semibold mb-2">2026</span>
                                <h3 class="text-xl font-bold text-navy mb-2">Local Leadership</h3>
                                <p class="text-gray-600 leading-7">Today, the company has grown into a trusted partner for property sales, investment, and asset management, committed to quality and service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 py-20">
            <div class="text-center mb-14">
                <p class="text-sm uppercase tracking-[0.2em] text-blue-600 font-semibold">Organisasi</p>
                <h2 class="text-3xl md:text-4xl font-bold text-navy">Organization Structure</h2>
            </div>

            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-3xl border border-gray-100 shadow-premium p-7 text-center">
                    <img src="/images/1.png" alt="Managing Director" class="w-20 h-20 rounded-full object-cover mx-auto mb-5">
                    <h3 class="text-xl font-bold text-navy">Managing Director</h3>
                    <p class="text-gray-600 mt-3 leading-7">Oversees the company vision, growth strategy, and business decisions that shape the company’s direction.</p>
                    <p class="text-sm font-semibold text-blue-600 mt-4">Team size: 12 employees</p>
                </div>

                <div class="bg-white rounded-3xl border border-gray-100 shadow-premium p-7 text-center">
                    <img src="/images/2.png" alt="Operations Manager" class="w-20 h-20 rounded-full object-cover mx-auto mb-5">
                    <h3 class="text-xl font-bold text-navy">Operations Manager</h3>
                    <p class="text-gray-600 mt-3 leading-7">Coordinates projects, development planning, and operations so every stage runs efficiently and measurably.</p>
                    <p class="text-sm font-semibold text-blue-600 mt-4">Team size: 18 employees</p>
                </div>

                <div class="bg-white rounded-3xl border border-gray-100 shadow-premium p-7 text-center">
                    <img src="/images/3.png" alt="Head of Sales" class="w-20 h-20 rounded-full object-cover mx-auto mb-5">
                    <h3 class="text-xl font-bold text-navy">Head of Sales</h3>
                    <p class="text-gray-600 mt-3 leading-7">Manages marketing, sales, and customer relationships to increase awareness and market demand for our products.</p>
                    <p class="text-sm font-semibold text-blue-600 mt-4">Team size: 24 employees</p>
                </div>

                <div class="bg-white rounded-3xl border border-gray-100 shadow-premium p-7 text-center">
                    <img src="/images/4.png" alt="Head of Customer Experience" class="w-20 h-20 rounded-full object-cover mx-auto mb-5">
                    <h3 class="text-xl font-bold text-navy">Head of Customer Experience</h3>
                    <p class="text-gray-600 mt-3 leading-7">Leads customer support and post-transaction services to make every client interaction clear, responsive, and reliable.</p>
                    <p class="text-sm font-semibold text-blue-600 mt-4">Team size: 10 employees</p>
                </div>
            </div>

            <div class="max-w-5xl mx-auto mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-3xl border border-gray-100 shadow-premium p-6">
                    <h3 class="text-xl font-bold text-navy mb-4">Technical & Development Team</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>• Architects and project planners</li>
                        <li>• Construction supervisors</li>
                        <li>• Legal and administration team</li>
                        <li>• Area development coordinators</li>
                    </ul>
                </div>
                <div class="bg-white rounded-3xl border border-gray-100 shadow-premium p-6">
                    <h3 class="text-xl font-bold text-navy mb-4">Customer Service Team</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>• Customer Relation Officer</li>
                        <li>• Property investment consultants</li>
                        <li>• Transaction administration team</li>
                        <li>• Post-transaction customer support</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 py-20">
            <div class="text-center mb-14">
                <p class="text-sm uppercase tracking-[0.2em] text-blue-600 font-semibold">Location</p>
                <h2 class="text-3xl md:text-4xl font-bold text-navy">Office Location</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="bg-white rounded-3xl shadow-premium border border-gray-100 overflow-hidden">
                    <iframe
                        class="w-full h-[420px]"
                        src="https://www.google.com/maps?q=Jl.%20Jendral%20Sudirman%20No.%20123%20Jakarta%2C%20Indonesia&output=embed"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="PT Horizon Properti Indonesia office location">
                    </iframe>
                </div>
                <div class="bg-white rounded-3xl shadow-premium border border-gray-100 p-8">
                    <h3 class="text-2xl font-bold text-navy mb-4">Head Office</h3>
                    <p class="text-gray-700 leading-8 mb-6">
                        Jl. Jenderal Sudirman No. 123, RT 02/RW 05, Kecamatan Setiabudi, Jakarta Selatan, Indonesia.
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li><span class="font-semibold text-navy">Phone:</span> (021) 555-1234</li>
                        <li><span class="font-semibold text-navy">Email:</span> hello@horizonproperti.id</li>
                        <li><span class="font-semibold text-navy">Office Hours:</span> Monday - Friday, 08:00 - 17:00 WIB</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 pb-20">
            <div class="flex items-center justify-between flex-wrap gap-4 mb-8">
                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-blue-600 font-semibold">Testimoni</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-navy">Buyer Reviews</h2>
                </div>
                <div class="bg-white rounded-full px-4 py-2 shadow-sm border border-gray-200">
                    <span class="text-lg font-bold text-navy">4.9</span>
                    <span class="text-yellow-500 ml-2">★★★★★</span>
                    <span class="text-gray-500 ml-2 text-sm">from 120+ reviews</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-3xl shadow-premium border border-gray-100 p-6">
                    <div class="flex items-center gap-1 text-yellow-500 mb-3">★★★★★</div>
                    <p class="text-gray-700 leading-7 mb-4">“The transaction was fast, the team was very responsive, and the home matched our expectations. The location is also ideal for families.”</p>
                    <div class="border-t border-gray-100 pt-4">
                        <p class="font-bold text-navy">Rina S.</p>
                        <p class="text-sm text-gray-500">Grand Horizon Cluster Buyer</p>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-premium border border-gray-100 p-6">
                    <div class="flex items-center gap-1 text-yellow-500 mb-3">★★★★★</div>
                    <p class="text-gray-700 leading-7 mb-4">“I am very pleased with the home design and material quality. The team gave clear explanations that were very helpful when choosing a unit.”</p>
                    <div class="border-t border-gray-100 pt-4">
                        <p class="font-bold text-navy">Dimas A.</p>
                        <p class="text-sm text-gray-500">Residence 2 Unit Buyer</p>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-premium border border-gray-100 p-6">
                    <div class="flex items-center gap-1 text-yellow-500 mb-3">★★★★★</div>
                    <p class="text-gray-700 leading-7 mb-4">“Excellent communication, organized documentation, and I felt secure from the initial survey through handover. Highly recommended.”</p>
                    <div class="border-t border-gray-100 pt-4">
                        <p class="font-bold text-navy">Ayu L.</p>
                        <p class="text-sm text-gray-500">Sudirman Apartment Buyer</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-navy text-white py-8 text-center text-sm">
        <p>&copy; 2026 PT Horizon Properti Indonesia. All Rights Reserved.</p>
    </footer>

</body>
</html>
