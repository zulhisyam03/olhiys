<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Galery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            'email' => 'admin@argon.com',
            'password' => bcrypt('secret')
        ]);        

        Storage::copy('lingkungan-hidup.jpg','upload-images/lingkungan-hidup.jpg');
        Storage::copy('lingkungan-hidup.jpg','upload-images/galery/lingkungan-hidup.jpg');

        Berita::factory(12)->create();
        Galery::factory(20)->create();

    }
}
