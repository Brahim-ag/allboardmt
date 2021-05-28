<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispo extends Model
{
    use HasFactory;

    protected $table = 'dispos';
    public $timestamps = true;

    protected $fillable = [
        
            'typeM',
            'motif',
            'duree',
            'number',
            'dateSign',
            'dateEffe',
        'employee_id',
        
    ];
}
