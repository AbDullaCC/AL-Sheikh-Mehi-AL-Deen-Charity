<?php

use App\Models\Author;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\Attachment;
use Wever\Laradot\App\FilterTypes\LikeFilter;
use Wever\Laradot\App\Traits\Filterable;

return [
    // ----------------------------------------------------------
    // Model configuration
    // ----------------------------------------------------------
    'model' => [
//        'table'       => 'posts',             // (optional) custom table name
//        'fillable'    => ['title','body'],    //  (optional) (auto-generated)
//        'filterable'  => ['title','published_at'], //  (optional)
//        'search_through' => ['title','body'], //  (optional)
//        'traits'      => [Filterable::class], //  (optional)
//        'hidden'      => ['deleted_at'], //  (optional)
    ],

    // ----------------------------------------------------------
    // Attributes: define type, validation, casting, etc.
    // ----------------------------------------------------------
    'attributes' => [
        'title' => [
            'type'     => 'string',
//            'set_rules'    => ['string','max:255'], //optional, sets rules to exactly  these
            'rules'    => ['regex:a-zA-Z0-9'], //optional, add's these rules to the default rules
            'unique'   => true, //  (optional)
//            'cast'     => 'string', //  (optional)
        ],
        'desc' => [
            'type'     => 'text',
             'rules'    => ['string','max:255'],
//            'unique'   => true,
//            'cast'     => 'string',
//            'filter'   => LikeFilter::class,
        ],
//        'body' => [
//            'type'     => 'text',
//            'rules'    => ['required','string'],
//            'nullable' => false,
//            'cast'     => 'string',
//        ],
        'published_at' => [
            'type'     => 'datetime',
//            'rules'    => ['nullable','date'],
            'cast'     => 'datetime',
            'default'  => "{now()}",
        ],
    ],

    // ----------------------------------------------------------
    // Relations: belongsTo, hasMany, belongsToMany, morphMany, etc.
    // ----------------------------------------------------------
    'relations' => [
        'belongsTo' => [
            [
//                'relation'   => 'author', //  (optional) (auto)
                'class'      => "App\Models\Author",
//                'foreignKey' => 'author_id', //  (optional) (auto)
            ]
        ],
        'hasMany' => [
            [
                'relation'   => 'comments', //  (optional) (auto)
                'class'      => "App\Models\Comment",
                // 'foreignKey' => 'post_id', //  (optional)
            ],
        ],
//
//        'belongsToMany' => [
//            [
//                // 'relation'   => 'myNega', //  (optional) (auto)
//                'class'      => Tag::class,
//                'pivot'      => 'post_tag',
//            ],
//        ],
//
//        'morphMany' => [
//            [
//                // 'relation' => 'attachments', //  (optional) (auto)
//                'class'    => Attachment::class,
//                'name'     => 'attachable',
//            ],
//        ],
    ],

    // ----------------------------------------------------------
    // Resource visibility: public vs. private properties
    // ----------------------------------------------------------
    'resource' => [
        // 1) Leave empty to include ALL attributes & relations as public
        //    'public'  => [],
        //    'private' => [],

        // 2) Define only public fields; all others go to private
        // 'public' => ['title','published_at','author','tags'],

        // 3) Define only private fields; all others go to public
        // 'private' => ['body','comments'],

        // 4) If both provided, respects exactly (no implicit fields)
        'private' => ['body','comments'],

        // Fields to always ignore
        'ignore'  => ['deleted_at'],
    ],
];
