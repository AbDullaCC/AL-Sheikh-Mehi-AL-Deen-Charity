<?php
namespace App\Models\Rules;
use Wever\Laradot\App\Models\Rules\BaseRules;
class MeetRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'date' => ['date'],
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [

        ];
    }
}

