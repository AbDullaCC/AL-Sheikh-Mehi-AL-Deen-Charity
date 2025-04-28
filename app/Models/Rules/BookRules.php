<?php
namespace App\Models\Rules;
use Wever\Laradot\App\Models\Rules\BaseRules;
class BookRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [
            'title' => ['string', 'max:255', 'regex:a-zA-Z0-9', 'unique:books,title'],
            'desc' => ['string', 'string', 'max:255'],
            'published_at' => [],
            'author_id' => ['integer', 'exists:authors,id'],
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [

        ];
    }
}

