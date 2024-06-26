<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    public function albumMetas()
    {
        return $this->hasMany(AlbumMeta::class);
    }

    public function musics()
    {
        return $this->belongsToMany(Music::class, 'album_music');
    }
}
