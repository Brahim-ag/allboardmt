<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutation extends Model
{
    use HasFactory;

    protected $table = 'mutations';
    public $timestamps = true;

    protected $fillable = [
        'from',
        'to',
        'Number',
        'type',
        'dateStart',
        'dateSignature',
        'numberRef',
        'dateRef',
        'employee_id',
        
    ];
}
