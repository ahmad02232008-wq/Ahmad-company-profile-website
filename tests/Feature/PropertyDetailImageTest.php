<?php

namespace Tests\Feature;

use App\Models\Properti;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PropertyDetailImageTest extends TestCase
{
    use RefreshDatabase;

    public function test_detail_page_uses_database_image_path_without_duplicate_images_prefix(): void
    {
        Properti::create([
            'nama_properti' => 'Test Property',
            'jenis' => 'Rumah',
            'harga' => 500000000,
            'lokasi' => 'Bandung',
            'luas_tanah' => 100,
            'luas_bangunan' => 80,
            'kamar_tidur' => 3,
            'kamar_mandi' => 2,
            'gambar' => 'images/residence.png',
            'deskripsi' => 'Deskripsi test',
        ]);

        $response = $this->get('/properti/1');

        $response->assertOk();
        $response->assertSee('images/residence.png', false);
        $response->assertDontSee('images/images/residence.png', false);
    }
}
