<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\MeetRules;

class CreateMeetRequest extends FormRequest
{
    public function rules()
    {
        return MeetRules::required()
            ->getRules();
    }

    public function messages(){
        return MeetRules::getMessages();
    }
}
