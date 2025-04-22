<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'is_bought',
    ];

    public function Courses()
    {
        return $this->belongsTo(course::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
