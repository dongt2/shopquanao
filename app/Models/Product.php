<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'cover_image',
        'price',
        'quantity',
        'category_id',
    ];

    public function review()
    {
        return $this->hasMany(Review::class);
    }

}
