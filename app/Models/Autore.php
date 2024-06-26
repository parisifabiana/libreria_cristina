<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
    use HasFactory;

    protected $table = 'autori';

    protected $fillable = [
        'nome',
        'cognome',
        'nazionalita',
        'data_nascita'
    ];

    public $timestamp = false;

    public function libri()
    {
        return $this->hasMany(Libro::class);
    }
}
