<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    use HasFactory;

    protected $table = 'spouses';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'lastname',
        'dataNaiss',
        'commNaiss',
        'wilayaNaiss',
        'dairaNaiss',
        'work',
        'dataMariage',
        'dataDevorce',
        'dataDeath',
        'employee_id',
    ];

    // public function employee()
    // {
    //     return $this->belongsTo('App\Models\Employee');
    // }
}
