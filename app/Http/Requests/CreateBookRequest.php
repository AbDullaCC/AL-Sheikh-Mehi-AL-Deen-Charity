<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\BookRules;

class CreateBookRequest extends FormRequest
{
    public function rules()
    {
        return BookRules::required()
            ->getRules();
    }

    public function messages(){
        return BookRules::getMessages();
    }
}
