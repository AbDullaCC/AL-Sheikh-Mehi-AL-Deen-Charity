<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\RequestRules;

class CreateRequestRequest extends FormRequest
{
    public function rules()
    {
        return RequestRules::required()
            ->getRules();
    }

    public function messages(){
        return RequestRules::getMessages();
    }
}
