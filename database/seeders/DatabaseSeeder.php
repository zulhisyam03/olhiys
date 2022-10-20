<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\PostGalery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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

        DB::table('galeries')->insert([
            'title' => 'Judul-Gambar-Pertama',
            'image' => url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.EiAj4z-4iM4g1b-FAhDYfQHaFj%26pid%3DApi&f=1&ipt=3d1f7daac623141b6ed7d3e03ee41e76179ed2e2c99ff010c0d20e2c7bd7916d&ipo=images'),
        ]);
        DB::table('galeries')->insert([
            'title' => 'Judul-Gambar-Kedua',
            'image' => url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.Qt3WbchuQBhJ9kZztUZSogHaEK%26pid%3DApi&f=1&ipt=b1da453594253660cb1a5e294548d5bd2628029f9f2290cc38cd87c98c026c46&ipo=images'),
        ]);
        DB::table('galeries')->insert([
            'title' => 'Judul-Gambar-Tiga',
            'image' => url('https://3.bp.blogspot.com/-ZRG5rYetbKw/TpaU8qs54mI/AAAAAAAAAZg/MKKNtDhn0_g/s1600/perebutan+kekuasaan.jpg'),
        ]);
        DB::table('galeries')->insert([
            'title' => 'Judul-Gambar-Empat',
            'image' => url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.HNwIpBYNrjSTOaXsgaQcpwAAAA%26pid%3DApi&f=1&ipt=e3533b7f69b09317bdc0e2df4c60fe5ba6a1808de3ef1db64aa7cf5fe9dbacd8&ipo=images'),
        ]);
        DB::table('galeries')->insert([
            'title' => 'Judul-Gambar-Lima',
            'image' => url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.4a72cL0K7DudJQnDf-x6SgHaD4%26pid%3DApi&f=1&ipt=66909d3bec81184578f4b959918b98383aac8a2edb4170ff11677413258eeaaa&ipo=images'),
        ]);
        DB::table('galeries')->insert([
            'title' => 'Judul-Gambar-Enam',
            'image' => url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.Me8iU1WV7qUPb-jH3WuuIQHaFM%26pid%3DApi&f=1&ipt=58773d5c097ce0d58055d4caed842fbd4f59c7966126c459c2a83c96241cca6f&ipo=images'),
        ]);


        Berita::factory(5)->create();
    }
}
