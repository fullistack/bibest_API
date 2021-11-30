<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends ApiRequest
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
            "name"          => "required|unique:users",
            "email"         => "required|email|unique:users",
            "password"      => "required|min:8",
            "phone"         => "required",
            "avatar"        => "required",
            "passport"      => "required",
            "country_iso"   => "required|exists:countries,iso",
            "city"          => "required",
            "address"       => "required",
            "privacy"       => "required",
        ];
    }
}
