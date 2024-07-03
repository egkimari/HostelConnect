<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_number',
        'course',
    ];

    // Define inverse polymorphic relationship
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}