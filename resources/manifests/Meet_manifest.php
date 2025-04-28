<?php

use App\Models\Request;
use Wever\Laradot\App\FilterTypes\LikeFilter;
use Wever\Laradot\App\Traits\Filterable;

return [
    // ----------------------------------------------------------
    // Model configuration
    // ----------------------------------------------------------
    'model' => [
        'fillable'    => ['name', 'date'],
        'filterable'  => ['name', 'date'],
        'search_through' => ['name'],
        'traits'      => [Filterable::class],
    ],

    // ----------------------------------------------------------
    // Attributes: define type, validation, casting, etc.
    // ----------------------------------------------------------
    'attributes' => [
        'name' => [
            'type'     => 'text',
            'rules'    => ['max:255'],
            'filter'   => LikeFilter::class,
        ],
        'date' => [
            'type'     => 'date',
            'rules'    => ['date'],
            'cast'     => 'date',
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
