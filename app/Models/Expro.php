<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expro extends Model
{
    use HasFactory;

    protected $table = 'expro';
    public $timestamps = true;

    protected $fillable = [
        'grade',
        'admin',
        'dateStart',
        'dateEnd',
        
        'employee_id',
        
    ];

   
}