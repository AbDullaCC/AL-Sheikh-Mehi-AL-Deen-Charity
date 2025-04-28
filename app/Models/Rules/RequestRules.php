<?php
namespace App\Models\Rules;
use Wever\Laradot\App\Models\Rules\BaseRules;
class RequestRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [
            'status' => ['in:accepted,rejected,pending'],
            'request_type_id' => ['integer', 'exists:request_types,id'],
            'meet_id' => ['integer', 'exists:meets,id', 'nullable'],
            'owner_type' => ['string'],
            'owner_id' => ['integer']
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [

        ];
    }
}

