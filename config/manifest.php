<?php

return [
    'default_rules' => [
        'string'      => ['string', 'max:255'],
        'text'        => ['string'],
        'integer'     => ['integer', 'min:-2147483648', 'max:2147483647'],
        'bigInteger'  => ['integer', 'min:-9223372036854775808', 'max:9223372036854775807'],
        'boolean'     => ['boolean'],
        'date'        => ['date'],
        'dateTime'    => ['date'],
        'timestamp'   => ['date'],
        'double'      => ['numeric', 'min:-999999999999', 'max:999999999999'],
        'float'       => ['numeric', 'min:-999999.99', 'max:999999.99'],
        'decimal'     => ['numeric', 'min:-999999.99', 'max:999999.99'],
        'json'        => ['json'],
        'jsonb'       => ['json'],
        'binary'      => ['nullable'],
        'char'        => ['string', 'max:255'],
        'uuid'        => ['string', 'size:36'],
    ],
    'resource_defaults' => [
        'string' => "\$this->{{field}}",
        'date'        => "\$this->{{field}}->format('Y-m-d')",
        'dateTime'    => "\$this->{{field}}->format('Y-m-d H:i:s')",
        'timestamp'   => "\$this->{{field}}->format('Y-m-d H:i:s')",
        'double'      => "number_format(\$this->{{field}}, 2)",
        'float'       => "number_format(\$this->{{field}}, 2)",
        'decimal'     => "number_format(\$this->{{field}}, 2)",
        'json'        => "json_decode(\$this->{{field}})",
        'jsonb'       => "json_decode(\$this->{{field}})",
        'binary'      => "bin2hex(\$this->{{field}})",
    ]
];
