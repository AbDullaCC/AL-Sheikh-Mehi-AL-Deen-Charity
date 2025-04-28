<?php

namespace App\Services;
use Wever\Laradot\App\Services\DotService;
use App\Models\Book;

class BookService extends DotService
{
    public function __construct()
    {
        parent::__construct(Book::class);
    }
}

