<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('propertis') || DB::table('propertis')->exists()) {
            return;
        }

        $now = now();

        DB::table('propertis')->insert([
            [
                'nama_properti' => 'Grand Horizon Residence',
                'jenis' => 'Home',
                'harga' => 850000000,
                'lokasi' => 'west Bandung',
                'luas_tanah' => 90,
                'luas_bangunan' => 72,
                'kamar_tidur' => 3,
                'kamar_mandi' => 2,
                'gambar' => 'rumah2.png',
                'deskripsi' => 'A two-story residence featuring a Modern Minimalist concept in West Bandung.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_properti' => 'Cluster Pesona Alam',
                'jenis' => 'Home',
                'harga' => 650000000,
                'lokasi' => 'Cimahi',
                'luas_tanah' => 72,
                'luas_bangunan' => 50,
                'kamar_tidur' => 2,
                'kamar_mandi' => 1,
                'gambar' => 'rumah1.png',
                'deskripsi' => 'A comfortable residence in Cimahi for young families.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_properti' => 'Apartemen Sudirman Suites',
                'jenis' => 'Apartement',
                'harga' => 1200000000,
                'lokasi' => 'Central Bandung',
                'luas_tanah' => 0,
                'luas_bangunan' => 45,
                'kamar_tidur' => 2,
                'kamar_mandi' => 1,
                'gambar' => 'rumah3.png',
                'deskripsi' => 'A luxurious apartment in the city center.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_properti' => 'Strategic Land Cibiru',
                'jenis' => 'Kavling',
                'harga' => 480000000,
                'lokasi' => 'East Bandung',
                'luas_tanah' => 220,
                'luas_bangunan' => 0,
                'kamar_tidur' => 0,
                'kamar_mandi' => 0,
                'gambar' => 'tanah4.png',
                'deskripsi' => 'A development-ready plot of land in East Bandung.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_properti' => 'Beautiful Land Plot in Cimahi',
                'jenis' => 'Kavling',
                'harga' => 390000000,
                'lokasi' => 'North Cimahi',
                'luas_tanah' => 180,
                'luas_bangunan' => 0,
                'kamar_tidur' => 0,
                'kamar_mandi' => 0,
                'gambar' => 'tanah5.png',
                'deskripsi' => 'A development-ready plot of land in a peaceful environment.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_properti' => 'Premium Land in West Bandung',
                'jenis' => 'Kavling',
                'harga' => 560000000,
                'lokasi' => 'West Bandung',
                'luas_tanah' => 300,
                'luas_bangunan' => 0,
                'kamar_tidur' => 0,
                'kamar_mandi' => 0,
                'gambar' => 'tanah6.png',
                'deskripsi' => 'A spacious plot of land ideal for residential development.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }

    public function down()
    {
        DB::table('propertis')->whereIn('nama_properti', [
            'Grand Horizon Residence',
            'Cluster Pesona Alam',
            'Apartemen Sudirman Suites',
            'Strategic Land Cibiru',
            'Beautiful Land Plot in Cimahi',
            'Premium Land in West Bandung',
        ])->delete();
    }
};