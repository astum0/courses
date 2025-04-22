<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'price',
        'is_active',
        'is_popular',
        'image'
    ];

    public function category(){
        return $this->belongsTo(category::class, 'category_id');
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }

}
