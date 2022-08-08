<?php
namespace App\Http\Requests\OtherGame;

use Illuminate\Foundation\Http\FormRequest;

class OtherGameUpdateRequest extends FormRequest
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
            'ar_name' => 'required|string|min:3|max:191',
            'en_name' => 'required|string|min:3|max:191|unique:other_games,en_name,'.$this->id,
            'path'   => 'nullable|array',
            'path.*' => 'required|mimes:png,jpg,jpeg|max:10000'
        ];
    }
}
