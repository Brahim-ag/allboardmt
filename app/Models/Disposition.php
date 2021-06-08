<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposition extends Model
{
    use HasFactory;
    protected $table = 'dispositions';
    public $timestamps = true;

    protected $fillable = [
        'source',
            'focus',
            'numberAct',
            'dateSignAct',
            'typeM',
            'motif',
            'duree',
            'dateEffe',
            'numberCf',
            'dateEffeCF',
            'numberActm',
            'dateActm',
            'dateRei',
            'dateInstal',
            'employee_id',
        
    ];

}