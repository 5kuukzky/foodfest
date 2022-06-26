<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'logo',
        'deskripsi',
    ];

    public function makanan()
    {
        return $this->hasMany('App\Models\Makanan');
    }
    
}
