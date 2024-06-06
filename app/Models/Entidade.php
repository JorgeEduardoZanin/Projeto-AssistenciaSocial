<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function locais()
    {
        return $this->belongsTo(Local::class);
    }
    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }
}
