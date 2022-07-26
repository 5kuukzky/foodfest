<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory, Searchable;


    protected $fillable = [
        'nama',
        'logo',
        'slug',
    ];

    public function makanan()
    {
        return $this->hasMany('App\Models\Makanan');
    }

    public function searchableAs()
    {
        return 'posts_index';
    }

    public function toSearchableArray()
    {
        return [
            'nama' => $this->nama,
        ];
    }
}
