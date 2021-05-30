<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postesup extends Model
{
    use HasFactory;

    protected $table = 'postesups';
    public $timestamps = true;

    protected $fillable = [
        'poste', 
            'typem', 
            'typea', 
            'number',
           'dateSignature',
           'dateEffect',
           'dateInsta',
            'NumberVisaCf',
           'dateVisaCf',
            'employee_id',
            'structure'
        
    ];
}