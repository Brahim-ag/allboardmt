<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'nameAr',
        'typeContrat',
        'actContrat',
        'timeContrat',
        'lastname',
        'lastnameAr',
        'sexe',
        'dataNaiss',
        'cityNaiss',
        'dairaNaiss',
        'wilaya',
        'nameFather',
        'nameMother',
        'lastnameMother',
        'addres',
        'NsocialSecure',
        'NMutu',
        'nameMutu',
        'mutuAgence',
        'nationalite',
        'bankNumber',
        'bankName',
        'bankSNumber',
        'bankAgency',
        'telephone',
        'bloodType',
        'team_id',
        'nin',
        'itlvl',
        'situation',
        'maladie',
        'namefatherAr',
        'nameMotherAr',
        'lastnameMotherAr',
        'adresseAr',
        'logement',
        'email'
    ];

    public function spouses()
    {
        return $this->hasMany('App\Models\Spouse');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Child');
    }

    public function antecedents()
    {
        return $this->hasMany('App\Models\Antecedent');
    }

    public function Antecedanjudi()
    {
        return $this->hasMany('App\Models\Antecedanjudi');
    }

    public function grades()
    {
        return $this->hasMany('App\Models\Grade')->orderBy('dateStart', 'desc');
    }

    public function detachements()
    {
        return $this->hasMany('App\Models\Detachement');
    }

    public function mutations()
    {
        return $this->hasMany('App\Models\Mutation');
    }

    public function profile()
    {
        return $this->hasMany('App\Models\Profile');
    }

    public function fonctions()
    {
        return $this->hasMany('App\Models\Fonction');
    }

    public function primes()
    {
        return $this->hasMany('App\Models\Prime');
    }

    public function evaluations()
    {
        return $this->hasMany('App\Models\Evaluation');
    }
    public function recrutements()
    {
        return $this->hasMany('App\Models\Recrutement');
    }

    public function echelons()
    {
        return $this->hasMany('App\Models\Echelon');
    }
    public function dispos()
    {
        return $this->hasMany('App\Models\Dispo');
    }
    public function horscadres()
    {
        return $this->hasMany('App\Models\Horscadre');
    }
    public function postesups()
    {
        return $this->hasMany('App\Models\Postesup');
    }
    public function Fonctionsup()
    {
        return $this->hasMany('App\Models\Fonctionsup');
    }

    public function Regims()
    {
        return $this->hasMany('App\Models\Regim');
    }

    public function Cessations()
    {
        return $this->hasMany('App\Models\Cessation');
    }

    public function Conges()
    {
        return $this->hasMany('App\Models\Conge');
    }

    public function Formation()
    {
        return $this->hasMany('App\Models\Formation');
    }

    public function Formationint()
    {
        return $this->hasMany('App\Models\Formationint');
    }

    
    public function Stage()
    {
        return $this->hasMany('App\Models\Stage');
    }

    public function military()
    {
        return $this->hasMany('App\Models\Military');
    }

    public function Language()
    {
        return $this->hasMany('App\Models\Language');
    }

    public function Expro()
    {
        return $this->hasMany('App\Models\Expro');
    }
}