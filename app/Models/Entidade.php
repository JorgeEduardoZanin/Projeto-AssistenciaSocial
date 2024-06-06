<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'description',
        'hour',
        'image',
        'local_id'
    ];

    public function locals(): BelongsTo
    {
        return $this->belongsTo(Local::class, 'local_id');
    }
    public function noticias(): HasMany
    {
        return $this->HasMany(Noticia::class);
    }
}

