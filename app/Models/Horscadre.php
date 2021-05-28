<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horscadre extends Model
{
    use HasFactory;
    protected $table = 'horscadres';
    public $timestamps = true;

    protected $fillable = [
        'source',
            'focus',
            'mission',
            'typeM',
            'motif',
            'duree',
            'number',
            'dateSign',
            'dateEffe',
            'numberCf',
            'dateEffeCF',
        'employee_id',
        
    ];
}
