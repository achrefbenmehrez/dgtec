<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'billing_address_name' => 'required',
            'billing_address_address1' => 'required',
            'billing_address_postcode' => 'required',
            'billing_address_city' => 'required',
            'billing_address_country' => 'required',
            'form_company_kbis' => 'required',
            'company_name' => 'required',
            'business_name' => 'required',
            'company_phone' => 'required',
            'company_business_id' => 'required',
            'form_company_kbis' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'login' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required|confirmed|min:6'
        ];
    }
}
