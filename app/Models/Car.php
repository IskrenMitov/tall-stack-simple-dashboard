<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'brand',
        'model',
    ];

    /**
     * Get all the car's images.
     * @return MorphMany
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
