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
        'category_id',
        'weight',
        'quantity',
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
