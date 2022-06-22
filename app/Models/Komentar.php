<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_makanan',
        'isi',
    ];

    public function makanan()
    {
        return $this->belongsTo('App\Models\Makanan');
    }
}
