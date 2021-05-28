<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grades';
    public $timestamps = true;

    protected $fillable = [
        'grade',
        'type',
        'typeDact',
        'typeM',
        'Number',
        'dateSignature',
        'dateStart',
        'newEchelon',
        'nVF',
        'dateVisaRF',
        'dateIns',
        'employee_id',
        
    ];
}