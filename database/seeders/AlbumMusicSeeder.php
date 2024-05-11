<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Music;
use Illuminate\Database\Seeder;

class AlbumMusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $musics = Music::factory(10)->create();
        $albums = Album::factory(5)->create();

        foreach ($musics as $music) {
            $randomAlbum = $albums->random(rand(1, 5));
            $music->albums()->attach($randomAlbum);
        }
    }
}
