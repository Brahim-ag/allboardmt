<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detachement extends Model
{
    use HasFactory;

    protected $table = 'detachements';
    public $timestamps = true;

    protected $fillable = [
        'admin',
        'to',
        'motif',
        'nature',
        'Number',
        'dateSignature',
        'dateStart',
        'dateEnd',
        'employee_id',
        
    ];
}
