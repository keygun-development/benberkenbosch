<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AlbumSeeder::class,
            UserSeeder::class,
            ContentHomeSeeder::class,
            FloatingImageSeeder::class,
            AboutSeeder::class,
            ArtistMusicSeeder::class,
            AlbumMusicSeeder::class,
        ]);
    }
}
