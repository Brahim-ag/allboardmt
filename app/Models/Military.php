<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Military extends Model
{
    use HasFactory;

    protected $table = 'militaries';
    public $timestamps = true;

    protected $fillable = [
        'Number',
        'date',
        'NumberPosition',
        'dateSignature',
        'dateStart',
        'NumberRein',
        'dateSignatureRein',
        'dateStartRein',
        'employee_id',

    ];
}
