<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\MeetRules;

class UpdateMeetRequest extends FormRequest
{
    public function rules()
    {
        return MeetRules::getRules();
    }

    public function messages(){
        return MeetRules::getMessages();
    }
}
