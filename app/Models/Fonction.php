<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    use HasFactory;

    protected $table = 'fonctions';
    public $timestamps = true;

    protected $fillable = [
        'admin',
        'fonction',
        'fonctionAr',
        'type',
        'Number',
        'dateSignature',
        'dateStart',
        'employee_id',
        
    ];
}
