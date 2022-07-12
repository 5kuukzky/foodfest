<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_course',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'id_course');
    }
}
