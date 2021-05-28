<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cessation extends Model
{
    use HasFactory;

    protected $table = 'cessations';
    public $timestamps = true;

    protected $fillable = [
        'motif',
            'typeA',
            'dateA',
            'nRef',
            'dateSign',
            'numberCf',
            'dateEffeCF',
            'employee_id',
        
    ];
}
