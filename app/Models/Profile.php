<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';
    public $timestamps = true;

    protected $fillable = [
        'level',
        'gradution',
        'whereU',
        'postbac',
        'spec',
        'year',
        'employee_id',
        
    ];

}