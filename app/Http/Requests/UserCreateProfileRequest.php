<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateProfileRequest extends FormRequest
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
            'procategory_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'first_contact' => 'required',
            'country_id' => 'required',
            'region' => 'required',
            'city' => 'required',
            'protype_id' => 'required',
            'profile_photo' => 'image|mimes:jpg,png|max:20000',
            'cover_photo' => 'image|mimes:jpg,png|max:20000',
        ];
    }
    
    public function messages() {
        return [
            'name.required' => 'Enter Your Company Name',
            'first_contact.required' => 'Your Contact Number Is Required',
            'procategory_id.required' => 'Select a professional category',
            'country_id.required' => 'Select Your Country',
            'region.required' => 'Enter your region or state of province',
            'city.required' => 'Your City Is Required',
            'protype_id.required' => 'Select A Business Type',
        ];
    }
}
