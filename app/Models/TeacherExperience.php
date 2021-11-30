<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        "experience"
    ];

    public $timestamps = false;
}
