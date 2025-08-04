<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 * @method static find($id)
 */
class Course extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'description',
        'thumbnail', 'price', 'level', 'status'
    ];

    public function instructor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
