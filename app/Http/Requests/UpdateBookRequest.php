<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\BookRules;

class UpdateBookRequest extends FormRequest
{
    public function rules()
    {
        return BookRules::getRules();
    }

    public function messages(){
        return BookRules::getMessages();
    }
}
