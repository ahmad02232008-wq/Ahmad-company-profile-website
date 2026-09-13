<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Properti;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Properti 1 (Yang ada gambarnya)
        Properti::updateOrCreate(['nama_properti' => 'Grand Horizon Residence'], [
            'nama_properti' => 'Grand Horizon Residence',
            'jenis' => 'Home',
            'harga' => 850000000,
            'lokasi' => 'west Bandung',
            'luas_tanah' => 90,
            'luas_bangunan' => 72,
            'kamar_tidur' => 3,
            'kamar_mandi' => 2,
            'gambar' => 'rumah2.png',
            'deskripsi' => 'A two-story residence featuring a Modern Minimalist concept, located in the rapidly developing area of West Bandung. The property showcases a contemporary natural-stone façade, elegant wood accents, and thoughtfully designed spaces that maximize natural light, creating a sophisticated, comfortable, and inviting living environment.',
        ]);

        // Properti 2
        Properti::updateOrCreate(['nama_properti' => 'Cluster Pesona Alam'], [
            'nama_properti' => 'Cluster Pesona Alam',
            'jenis' => 'Home',
            'harga' => 650000000,
            'lokasi' => 'Cimahi',
            'luas_tanah' => 72,
            'luas_bangunan' => 50,
            'kamar_tidur' => 2,
            'kamar_mandi' => 1,
            'gambar' => 'rumah1.png',
            'deskripsi' => 'A charming and comfortable residence in the heart of Cimahi. Ideal for young families seeking a peaceful living environment with 24-hour security, offering both comfort and peace of mind.',
        ]);

        // Properti 3
        Properti::updateOrCreate(['nama_properti' => 'Apartemen Sudirman Suites'], [
            'nama_properti' => 'Apartemen Sudirman Suites',
            'jenis' => 'Apartement',
            'harga' => 1200000000,
            'lokasi' => 'Central Bandung',
            'luas_tanah' => 0,
            'luas_bangunan' => 45,
            'kamar_tidur' => 2,
            'kamar_mandi' => 1,
            'gambar' => 'rumah3.png',
            'deskripsi' => 'A luxurious apartment with complete facilities such as a swimming pool, gym, and direct access to a shopping mall. Highly strategic located in the city center.',
        ]);

        // Properti 4 (Tanah)
        Properti::updateOrCreate(['id' => 5], [
            'nama_properti' => 'Strategic Land Cibiru',
            'jenis' => 'Kavling',
            'harga' => 480000000,
            'lokasi' => 'East Bandung',
            'luas_tanah' => 220,
            'luas_bangunan' => 0,
            'kamar_tidur' => 0,
            'kamar_mandi' => 0,
            'gambar' => 'tanah4.png',
            'deskripsi' => 'A development-ready plot of land in East Bandung, offering direct access to a main road, a rapidly developing surrounding area, and strong potential for long-term investment.
',
        ]);

        // Properti 5 (Tanah)
        Properti::updateOrCreate(['id' => 6], [
            'nama_properti' => 'Beautiful Land Plot in Cimahi',
            'jenis' => 'Kavling',
            'harga' => 390000000,
            'lokasi' => 'North Cimahi',
            'luas_tanah' => 180,
            'luas_bangunan' => 0,
            'kamar_tidur' => 0,
            'kamar_mandi' => 0,
            'gambar' => 'tanah5.png',
            'deskripsi' => 'A development-ready plot of land in a peaceful and green environment, offering convenient access and excellent potential for a family residence or long-term investment.
',
        ]);

        // Properti 6 (Tanah)
        Properti::updateOrCreate(['id' => 7], [
            'nama_properti' => 'Premium Land in West Bandung',
            'jenis' => 'Kavling',
            'harga' => 560000000,
            'lokasi' => 'West Bandung',
            'luas_tanah' => 300,
            'luas_bangunan' => 0,
            'kamar_tidur' => 0,
            'kamar_mandi' => 0,
            'gambar' => 'tanah6.png',
            'deskripsi' => 'A premium, spacious plot of land ideal for residential development, business ventures, or long-term investment in a rapidly growing area.
',
        ]);
    }
}