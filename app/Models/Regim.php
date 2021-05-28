<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regim extends Model
{
    use HasFactory;

    protected $table = 'regimdis';
    public $timestamps = true;

    protected $fillable = [
            'degre',
            'typef',
            'datef',
            'typeS',
            'nPV',
            'datePV',
            'degreSonctCom',
            'typeSonctCom',
            'nacte',
            'datesign',
            'dateeff',
            'employee_id',

        
    ];
}