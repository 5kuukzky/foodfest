<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'thumbnail',
        'slug',
        'harga',
        'video',
    ];

    public function user()
    {
        return $this->hasMany('App\Models\userCourse', 'id_user');
    }
}
