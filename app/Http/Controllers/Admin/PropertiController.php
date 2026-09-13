<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Properti;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Konsultasi;

class PropertiController extends Controller
{
    // 1. Menampilkan daftar properti untuk publik/customer
    public function indexCustomer()
    {
        $propertis = Properti::all();
        return view('customer.properti', compact('propertis'));
    }

    // 2. Menampilkan detail properti berdasarkan ID
    public function detailCustomer($id)
    {
        $properti = Properti::findOrFail($id);
        return view('customer.detail', compact('properti'));
    }

    // 3. Menyimpan form konsultasi/kontak dari customer
    public function storeKonsultasi(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:100',
            'no_hp' => 'required|string|max:14',
            'pesan' => 'required|string',
        ]);

        // Simpan data ke tabel pelanggans
        Pelanggan::create([
            'nama'  => $request->nama,
            'email' => $request->email ?? 'customer@horizon.com',
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->back()->with('success', 'Permintaan konsultasi Anda berhasil dikirim! Tim PT Horizon akan segera menghubungi Anda.');
    }

    // 4. Menampilkan daftar properti di Dashboard Admin
    public function indexAdmin()
    {
        $propertis = Properti::all();
        return view('properti.index', compact('propertis'));
    }

    // 5. Menampilkan form tambah properti baru
    public function create()
    {
        return view('properti.create');
    }

    // 6. Menyimpan data properti baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_properti' => 'required|string|max:255',
            'jenis'         => 'required|string',
            'harga'         => 'required|numeric',
            'lokasi'        => 'required|string',
        ]);

        Properti::create($request->all());

        return redirect('/admin/properti')->with('success', 'Data properti berhasil ditambahkan!');
    }

    // 7. Menampilkan form edit properti berdasarkan ID
    public function edit($id)
    {
        $properti = Properti::findOrFail($id);
        return view('properti.edit', compact('properti'));
    }

    // 8. Memperbarui data properti di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_properti' => 'required|string|max:255',
            'jenis'         => 'required|string',
            'harga'         => 'required|numeric',
            'lokasi'        => 'required|string',
        ]);

        $properti = Properti::findOrFail($id);
        $properti->update($request->all());

        return redirect('/admin/properti')->with('success', 'Data properti berhasil diperbarui!');
    }

    // 9. Menghapus data properti dari database
    public function destroy($id)
    {
        $properti = Properti::findOrFail($id);
        $properti->delete();

        return redirect('/admin/properti')->with('success', 'Data properti berhasil dihapus!');
    }

    // 10. Menampilkan daftar pesan konsultasi pelanggan di Admin
    public function indexKonsultasi()
    {
        $pelanggans = Pelanggan::all();
        return view('konsultasi.index', compact('pelanggans'));
    }
}