<?php

namespace Tests\Feature;

use Tests\TestCase;

class TourismPagesTest extends TestCase
{
    public function test_home_page_can_be_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Pesona Gorontalo');
        $response->assertSee('Wisata Alam &amp; Bahari', false);
        $response->assertSee('Wisata Sejarah &amp; Tradisi', false);
        $response->assertSee('Wisata Kuliner Otentik', false);
        $response->assertSee('images/destinasi/binte-biluhuta.jpg');
    }

    public function test_destinasi_page_can_be_rendered(): void
    {
        $response = $this->get('/destinasi');

        $response->assertStatus(200);
        $response->assertSee('Pulo Cinta');
        $response->assertSee('Benteng Otanaha');
        $response->assertSee('Desa Wisata Bubohu');
    }

    public function test_galeri_page_can_be_rendered(): void
    {
        $response = $this->get('/galeri');

        $response->assertStatus(200);
        $response->assertSee('Galeri Foto Pariwisata Gorontalo');
        $response->assertSee('Pulo Cinta Eco Resort');
        $response->assertSee('images/destinasi/binte-biluhuta.jpg');
    }

    public function test_kontak_page_can_be_rendered(): void
    {
        $response = $this->get('/kontak');

        $response->assertStatus(200);
        $response->assertSee('Hubungi Pusat Informasi Wisatawan');
        $response->assertSee('Nama Lengkap');
        $response->assertSee('Alamat Email Aktif');
    }

    public function test_layout_contains_tailwind_cdn_and_nav_links(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('https://cdn.tailwindcss.com', false);
        $response->assertSee('images/logo.png');
        $response->assertSee('Beranda');
        $response->assertSee('Destinasi');
        $response->assertSee('Galeri');
        $response->assertSee('Kontak');
    }
}
