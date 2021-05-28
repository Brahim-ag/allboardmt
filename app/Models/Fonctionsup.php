<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonctionsup extends Model
{
    use HasFactory;

    protected $table = 'fonctionsups';
    public $timestamps = true;

    protected $fillable = [
        'function',
        'typem',
        'typea', 
        'number',
        'dateSignature',
        'dateEffect',
        'NumberVisaCf',
        'dateVisaCf',
        'NumberVisaDGFP',
        'dateVisaDGFP',
        'numberAcc',
        'dateAcc',
        'dateInsta',
        'employee_id',
        
    ];
}
