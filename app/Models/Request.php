<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wever\Laradot\App\Traits\Filterable;
use App\Models\RequestType;
use App\Models\Meet;

class Request extends Model
{
    use HasFactory;
    use Filterable;


    protected $fillable = [
        'request_type_id', 'owner_type', 'owner_id', 'status', 'meet_id'
    ];
    public $filterable = [
        'request_type_id',
        'status',
        'meet_id',
    ];
//    public $lowLevelRelations = [
//        'requestType',
//        'meet',
//    ];
    public function requestType()
    {
        return $this->belongsTo(RequestType::class, 'request_type_id');
    }
    public function meet()
    {
        return $this->belongsTo(Meet::class, 'meet_id');
    }
    public function owner()
    {
        return $this->morphTo();
    }
}
