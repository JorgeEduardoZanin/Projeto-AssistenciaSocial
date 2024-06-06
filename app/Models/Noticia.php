<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'photos'
    ];


    public function entidades()
    {
        return $this->belongsTo(Entidade::class);
    }
}
