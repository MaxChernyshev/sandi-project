<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasSlug;



    protected $fillable = [
        'name',
        'description',
        'price',
        'menu_id',
        'category_id',
        'instruction_id',
        'weight',
        'quantity',
        'slug',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


    public function image() : MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

//    public function ingredients() : BelongsToMany
//    {
//        return $this->belongsToMany(Ingredient::class);
//    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function instruction() : BelongsTo
    {
        return $this->belongsTo(Instruction::class);
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
