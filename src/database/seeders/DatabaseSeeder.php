<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Data Post Contoh Berisi Artikel Pilihan
        $samplePosts = [
            [
                'title' => 'Pengenalan Framework Laravel 10 untuk Pemula',
                'slug' => 'pengenalan-framework-laravel-10-untuk-pemula',
                'body' => "Laravel adalah salah satu framework PHP paling populer di dunia saat ini. Dengan sintaks yang elegan dan fitur yang kaya seperti Eloquent ORM, Routing, Blade Templating, dan Migration, Laravel memudahkan pengembang untuk membangun aplikasi web berskala kecil hingga besar secara cepat dan terstruktur.\n\nDalam modul praktikum ini, kita mempelajari bagaimana cara membuat rute (Routing), pengontrol (Controller), dan tampilan (View) menggunakan Blade engine.",
                'status' => 'published',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Panduan Lengkap Fitur CRUD di Laravel',
                'slug' => 'panduan-lengkap-fitur-crud-di-laravel',
                'body' => "CRUD (Create, Read, Update, Delete) merupakan fondasi utama dalam pengembangan aplikasi berbasis web. Di Laravel, operasi CRUD dipadukan dengan fitur Eloquent ORM yang intuitif.\n\nArtikel ini membahas langkah demi langkah pembuatan fitur kelola postingan (Post Controller), mulai dari menampilkan daftar post (Index), form tambah post (Create & Store), detail post (Show), hingga form edit dan proses hapus data (Destroy).",
                'status' => 'published',
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Tips Membangun Aplikasi Web Modern dengan Blade Component',
                'slug' => 'tips-membangun-aplikasi-web-modern-dengan-blade-component',
                'body' => "Blade Templating Engine di Laravel menyediakan fitur Blade Components yang memungkinkan kita memecah tampilan UI menjadi komponen reusabel seperti Alert, Navbar, Footer, dan Cards.\n\nPenggunaan komponen ini membantu menjaga kode template tetap bersih, DRY (Don't Repeat Yourself), dan mudah dipelihara saat proyek berkembang pesat.",
                'status' => 'published',
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Draf Artikel: Eksplorasi Fitur Rest API di Laravel',
                'slug' => 'draf-artikel-eksplorasi-fitur-rest-api-di-laravel',
                'body' => "Ini adalah contoh draf artikel yang belum dipublikasikan. Dalam bab selanjutnya, kita akan membahas cara membuat API Endpoint menggunakan Resource Controller dan Laravel Sanctum untuk autentikasi token.",
                'status' => 'draft',
                'published_at' => null,
            ],
        ];

        foreach ($samplePosts as $postData) {
            Post::updateOrCreate(
                ['slug' => $postData['slug']],
                $postData
            );
        }

        // Tambah beberapa dummy post acak menggunakan Factory
        Post::factory(5)->create();
    }
}
