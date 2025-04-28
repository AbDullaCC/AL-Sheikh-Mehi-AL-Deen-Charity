<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wever\Laradot\App\Traits\Filterable;
use App\Models\Beneficiary;
use App\Models\SalaryChange;
use App\Models\Condition;

class Group extends Model
{
    use HasFactory;
    use Filterable;


    protected $fillable = [
        'name',
        'salary',
        'color',
    ];
    public $filterable = [
        'name',
        'salary',
        'color',
    ];
    public $search_through = [
        'name',
    ];
//    public $highLevelRelations = [
//        'conditions',
//        'beneficiaries',
//        'salaryChanges',
//    ];

    public function beneficiaries()
    {
        return $this->hasMany(Beneficiary::class);
    }
    public function salaryChanges()
    {
        return $this->hasMany(SalaryChange::class);
    }
    public function conditions()
    {
        return $this->belongsToMany(Condition::class, 'groups_conditions');
    }
}
