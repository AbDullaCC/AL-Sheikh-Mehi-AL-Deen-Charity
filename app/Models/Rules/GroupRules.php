<?php
namespace App\Models\Rules;
use Wever\Laradot\App\Models\Rules\BaseRules;
class GroupRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [
            'name' => ['string', 'max:255', 'unique:groups,name'],
            'salary' => ['integer', 'max:2147483647', 'min:0'],
            'color' => ['string', 'max:50'],
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [

        ];
    }
}

