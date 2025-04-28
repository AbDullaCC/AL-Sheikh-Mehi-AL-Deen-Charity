<?php

use App\Models\Meet;
use App\Models\RequestType;
use Wever\Laradot\App\Traits\Filterable;

return [
    // ----------------------------------------------------------
    // Model configuration
    // ----------------------------------------------------------
    'model' => [
        'table' => 'requests',
        'fillable'    => ['request_type_id', 'owner_type', 'owner_id', 'status', 'meet_id'],
        'filterable'  => ['request_type_id', 'status', 'meet_id'],
        'traits'      => [Filterable::class],
    ],

    // ----------------------------------------------------------
    // Attributes: define type, validation, casting, etc.
    // ----------------------------------------------------------
    'attributes' => [
        'status' => [
            'type'     => 'enum',
            'rules'    => ['in:accepted,rejected,pending'],
        ],
    ],

    // ----------------------------------------------------------
    // Relations: belongsTo, hasMany, belongsToMany, morphMany, etc.
    // ----------------------------------------------------------
    'relations' => [
        'belongsTo' => [
            [
                'relation'   => 'requestType',
                'class'      => 'App\Models\RequestType',
                'foreignKey' => 'request_type_id',
            ],
            [
                'relation'   => 'meet',
                'class'      => 'App\Models\Meet',
                'foreignKey' => 'meet_id',
            ],
        ],
        'morphs' => [
            'owner'
        ],
    ],

    // ----------------------------------------------------------
    // Resource visibility: public vs. private properties
    // ----------------------------------------------------------
    'resource' => [
    ],
];
