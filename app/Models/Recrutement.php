<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    use HasFactory;

    protected $table = 'recrutements';
    public $timestamps = true;

    protected $fillable = [
        'grade',
        'typem',
        'typep',
        'typeContra',
        'number',
        'NumberVisaCf',
        'structure',
        'dateVisaCf',
        'dateSignature',
        'dateEffect',
        'dateInsta',
        'employee_id',
        
    ];
}
