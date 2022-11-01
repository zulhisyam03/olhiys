<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Galery;
use App\Models\About;
use App\Models\Guest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'olhiys@gmail.com',
            'password' => bcrypt('secret')
        ]);        

        Storage::copy('lingkungan-hidup.jpg','upload-images/lingkungan-hidup.jpg');
        Storage::copy('lingkungan-hidup.jpg','upload-images/galery/lingkungan-hidup.jpg');
        Storage::copy('Struktur-Organisasi.jpg','upload-images/Struktur-oragnisasi.jpg');

        Guest::factory(5)->create();
        About::factory(1)->create();
        Berita::factory(12)->create();
        Galery::factory(20)->create();

    }
}
