<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AlbumMeta extends Model
{
    use HasFactory;

    protected $table = 'album_meta';

    public function albums(): BelongsToMany
    {
        return $this->belongsToMany(Album::class, 'album');
    }
}
