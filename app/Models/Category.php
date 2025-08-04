<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static orderBy(string $string)
 */
class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
