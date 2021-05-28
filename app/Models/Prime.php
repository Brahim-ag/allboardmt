<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prime extends Model
{
    use HasFactory;

    protected $table = 'primes';
    public $timestamps = true;

    protected $fillable = [
        'year',
        'first',
        'second',
        'third',
        'employee_id',
        
    ];

   
}
