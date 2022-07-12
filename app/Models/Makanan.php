<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class makanan extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [

        'nama',
        'gambar',
        'id_user',
        'id_provinsi',
        'slug',
        'deskripsi',
        'cara',
    ];

    public function komentar()
    {
        return $this->hasMany('App\Models\Komentar');
    }
    public function provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi', 'id_provinsi');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
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
