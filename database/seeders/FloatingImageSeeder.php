<?php

namespace Database\Seeders;

use App\Models\FloatingImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloatingImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FloatingImage::factory()->count(8)->create();
    }
}
