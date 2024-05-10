<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Music;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistMusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = Artist::factory(10)->create();

        $musics = Music::factory(10)->create();

        foreach ($musics as $music) {
            $randomArtists = $artists->random(rand(1, 10));
            $music->artists()->attach($randomArtists);
        }
    }
}
