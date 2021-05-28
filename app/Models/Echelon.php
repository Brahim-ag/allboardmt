<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echelon extends Model
{
    use HasFactory;
    protected $table = 'echelons';
    public $timestamps = true;

    protected $fillable = [
        'echelon',
        'number',
        'dateSign',
        'dateEffe',
        'duree',
        'typeComm',
        'numberApp',
        'dateSignApp',
        'employee_id'
        
    ];

}
