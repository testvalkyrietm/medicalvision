<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubmission extends FormRequest
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
            'title_id'         =>  'required',
            'email'         =>  'required|unique:submissions|email',
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'company_name'    =>  'required',
            'country_id'       =>  'required|int',
            'language_id'      =>  'required'
        ];
    }
}
