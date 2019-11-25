<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRequest extends FormRequest
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
            'name' => 'required|string|min:4|max:191',
            'age' => 'required|numeric',
            'phone' => 'required|max:191',
            'email' => 'required|email',
            'gender' => 'required',
            'nationality' => 'required',
            'qualification' => 'required',
            'work_type' => 'required',
            'type' => 'required',
            'volunteer_time' => 'required',
            'goal' => 'required',
        ];
    }
}
