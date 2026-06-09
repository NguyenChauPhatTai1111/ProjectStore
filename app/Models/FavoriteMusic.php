<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoriteMusic extends Model
{
    protected $table = 'favorite_music';

    protected $fillable = [
        'user_id',
        'track_id',
        'title',
        'artist',
        'cover',
        'preview',
    ];
}