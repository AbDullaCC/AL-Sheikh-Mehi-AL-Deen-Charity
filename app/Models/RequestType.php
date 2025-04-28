<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Request;

class RequestType extends Model
{
    use HasFactory;
    protected $table = 'requests_types';

    protected $fillable = [
        'name',
    ];
    public $filterable = [
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
