<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_provinsi',
        'nama',
        'gambar',
        'deskripsi',
        'cara',
    ];

    public function komentar()
    {
        return $this->hasMany('App\Models\Komentar');
    }
    public function provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi');
    }

}
