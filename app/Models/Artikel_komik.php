<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel_komik extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'nama',
        'genre',
        'autor',
        'tanggal_update',
        'tanggal_rilis',
        'deskripsi',
        'foto'
    ];

    
}
