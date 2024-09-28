<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'instruction_id',
        'weight',
        'quantity',
    ];


    public function image() : MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function ingredients() : BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
//        return $this->belongsTo(Category::class, 'category_id');
    }

    public function instruction() : BelongsTo
    {
        return $this->belongsTo(Instruction::class);
    }
}
