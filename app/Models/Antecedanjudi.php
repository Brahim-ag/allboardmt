<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antecedanjudi extends Model
{
    use HasFactory;

    protected $table = 'antecedanjudis';
    public $timestamps = true;

    protected $fillable = [
        'affaire',
        'quality',
        'jugement',
    'instance',
        'employee_id',
        
    ];
}
