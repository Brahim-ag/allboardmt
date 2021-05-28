<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $table = 'childs';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'lastname',
        'sexe',
        'cycle',
        'dataNaiss',
        'wilayaNaiss',
        'charge',
        'school',
        'employee_id',
        
    ];

   
}
