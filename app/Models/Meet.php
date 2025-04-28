<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wever\Laradot\App\Traits\Filterable;
use App\Models\Request;

class Meet extends Model
{
    use HasFactory;
    use Filterable;


    protected $fillable = [
        'name',
        'date',
    ];
    protected $casts = [
        'date' => 'date',
    ];
    public $filterable = [
        'name',
        'date',
    ];
    public $search_through = [
        'name',
    ];
//    public $highLevelRelations = [
//        'requests',
//    ];
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
