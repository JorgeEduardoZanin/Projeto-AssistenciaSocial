<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'entidade_id'
    ];


    public function entidades(): BelongsTo
    {
        return $this->belongsTo(Entidade::class, 'entidade_id');
    }
}
