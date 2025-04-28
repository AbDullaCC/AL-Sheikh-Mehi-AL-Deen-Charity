<?php

use App\Models\Beneficiary;
use App\Models\Condition;
use App\Models\SalaryChange;
use Wever\Laradot\App\FilterTypes\LikeFilter;
use Wever\Laradot\App\Traits\Filterable;

return [
    // ----------------------------------------------------------
    // Model configuration
    // ----------------------------------------------------------
    'model' => [
        // 'table'       => 'groups',            // (optional) custom table name
        'fillable'    => ['name', 'salary', 'color'],  // (optional) (auto-generated)
        'filterable'  => ['name', 'salary', 'color'],  // (optional)
        'search_through' => ['name'],         // (optional)
        'traits'      => [Filterable::class], // (optional)
    ],

    // ----------------------------------------------------------
    // Attributes: define type, validation, casting, etc.
    // ----------------------------------------------------------
    'attributes' => [
        'name' => [
            'type'     => 'text',
            'rules'    => ['string', 'max:255'],
            'unique'   => true,
//            'cast'     => 'string',
            'filter'   => LikeFilter::class,
        ],
        'salary' => [
            'type'     => 'integer',
            'rules'    => ['integer', 'min:0'],
//            'cast'     => 'integer',
        ],
        'color' => [
            'type'     => 'text',
            'rules'    => ['string', 'max:50'],
//            'cast'     => 'string',
        ],
    ],

    // ----------------------------------------------------------
    // Relations: belongsTo, hasMany, belongsToMany, morphMany, etc.
    // ----------------------------------------------------------
    'relations' => [
        'hasMany' => [
            [
                'relation'   => 'beneficiaries',
                'class'      => 'App\Models\Beneficiary',
                // 'foreignKey' => 'group_id', // (optional) (auto)
            ],
            [
                'relation'   => 'salaryChanges',
                'class'      => 'App\Models\SalaryChange',
                // 'foreignKey' => 'group_id', // (optional) (auto)
            ],
        ],
        'belongsToMany' => [
            [
                'relation'   => 'conditions',
                'class'      => 'App\Models\Condition',
                'pivot'      => 'groups_conditions',
            ],
        ],
    ],

    // ----------------------------------------------------------
    // Resource visibility: public vs. private properties
    // ----------------------------------------------------------
    'resource' => [
        // 1) Leave empty to include ALL attributes & relations as public

    ],
];
