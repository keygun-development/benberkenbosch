<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    public function artists() {
        return $this->belongsToMany(Artist::class, 'artist_music');
    }

    public function albums() {
        return $this->belongsToMany(Album::class, 'album_music');
    }
}
