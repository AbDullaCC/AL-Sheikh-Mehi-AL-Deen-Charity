<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\RequestRules;

class UpdateRequestRequest extends FormRequest
{
    public function rules()
    {
        return RequestRules::getRules();
    }

    public function messages(){
        return RequestRules::getMessages();
    }
}
