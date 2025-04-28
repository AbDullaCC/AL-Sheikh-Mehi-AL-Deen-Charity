<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\RequestTypeRules;

class UpdateRequestTypeRequest extends FormRequest
{
    public function rules()
    {
        return RequestTypeRules::getRules();
    }

    public function messages(){
        return RequestTypeRules::getMessages();
    }
}
