<?php

use App\Models\Request;
use Wever\Laradot\App\FilterTypes\LikeFilter;
use Wever\Laradot\App\Traits\Filterable;

return [
    // ----------------------------------------------------------
    // Model configuration
    // ----------------------------------------------------------
    'model' => [
        'table'       => 'requests_types',  // custom table name
        'fillable'    => ['name'],
        'filterable'  => ['name'],
    ],

    // ----------------------------------------------------------
    // Attributes: define type, validation, casting, etc.
    // ----------------------------------------------------------
    'attributes' => [
        'name' => [
            'type'     => 'text',
            'rules'    => ['max:255'],
            'unique'   => true,
            'filter'   => LikeFilter::class,
        ],
    ],

    // ----------------------------------------------------------
    // Relations: belongsTo, hasMany, belongsToMany, morphMany, etc.
    // ----------------------------------------------------------
    'relations' => [
        'hasMany' => [
            [
                'relation'   => 'requests',
                'class'      => 'App\Models\Request',
            ],
        ],
    ],

    // ----------------------------------------------------------
    // Resource visibility: public vs. private properties
    // ----------------------------------------------------------
    'resource' => [
    ],
];
