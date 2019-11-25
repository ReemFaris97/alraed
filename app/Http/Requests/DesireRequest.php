<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesireRequest extends FormRequest
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
            'name' => 'required|string|min:6|max:191',
            'phone' => 'required',
            'birth_date' => 'required',
            'birth_area' => 'required',
            'live_area' => 'required',
            'nationality' => 'required',
            'student' => 'required',
            'job' => 'required',
            'transport' => 'required',
            'club' => 'required',
            'game' => 'required',
        ];
    }
}
