<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    protected $fillable = [
        'section_id',
        'title',
        'content',
        'video_url',
        'duration',
        'order',
    ];
    public function section(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
