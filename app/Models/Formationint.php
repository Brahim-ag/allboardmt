<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formationint extends Model
{
    use HasFactory;

    protected $table = 'formationints';
    public $timestamps = true;

    protected $fillable = [
        'objet',
        'date',
        
        'promo',
        'duree',
        'etabili',
            'employee_id',

        
    ];
}