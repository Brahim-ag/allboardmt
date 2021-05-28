<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;

    protected $table = 'notations';
    public $timestamps = true;

    protected $fillable = [
        'year',
        'note',
        'employee_id',
        
    ];

   
}
