<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'name',
        'duration',
        'order'
    ];

    public function album() : BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}
