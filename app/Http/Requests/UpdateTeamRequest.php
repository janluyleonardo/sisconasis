<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Team_manager'=>'required|string|max:255',
            'Team_name'=>'required|string|max:255',
            'Team_email'=>'required|email',
            'Team_phone'=>'required|string|max:255',
            'Team_neighborhood'=>'required|string|max:255',
            'Team_shield'=>'required|image|mimes:png|max:2048',
        ];
    }
}
