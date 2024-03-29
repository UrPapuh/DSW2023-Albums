<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'name',
        'year',
    ];

    public function artist() : BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    public function songs() : HasMany
    {
        return $this->hasMany(Song::class);
    }

    public function numSongs()
    {
        return $this->hasMany(Song::class)->count();
    }
}
