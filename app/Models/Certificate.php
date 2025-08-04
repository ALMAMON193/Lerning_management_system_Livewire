<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['user_id', 'course_id', 'certificate_code', 'certificate_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    protected $casts = [
        'issued_at' => 'datetime',
    ];

}
