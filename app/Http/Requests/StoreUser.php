<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'profile_picture' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'state_id' => 'required',
            'postal_code' => 'required|numeric',
            'cellphone_number' => 'required|numeric'
        ];
    }
}
